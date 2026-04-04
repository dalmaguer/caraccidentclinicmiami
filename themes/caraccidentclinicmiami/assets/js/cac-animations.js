/**
 * cac-animations.js
 *
 * Entrance animations for key page elements:
 *   1. Section headings   — word-by-word reveal from below (curtain effect)
 *   2. Service card grids — staggered cards fade + slide up as grid enters view
 *   3. Process steps      — sequential reveal as the steps section enters view
 *
 * Every animation:
 *   - Fires once when the element enters the viewport, then stops observing
 *   - Is completely skipped when the user prefers reduced motion
 *
 * Depends on: GSAP (loaded as a separate script before this file).
 */
(function () {
	'use strict';

	// Bail immediately if the user prefers reduced motion.
	if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
		return;
	}

	// Bail if GSAP did not load.
	if ( typeof window.gsap === 'undefined' ) {
		return;
	}

	// Signal to the inline head script that this file loaded and initialised
	// successfully — prevents the fail-safe from removing .cac-anim-js early.
	window.__cacAnimReady = true;

	// ─── Shared helper ───────────────────────────────────────────────────────

	/**
	 * Observe `el` and fire `callback` exactly once when it enters the viewport.
	 *
	 * @param {Element}  el
	 * @param {Function} callback  Called with the IntersectionObserverEntry.
	 * @param {Object}   [options] IntersectionObserver options override.
	 */
	function observeOnce( el, callback, options ) {
		var defaults = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
		var opts = Object.assign( {}, defaults, options || {} );

		var io = new IntersectionObserver( function ( entries, observer ) {
			entries.forEach( function ( entry ) {
				if ( ! entry.isIntersecting ) return;
				callback( entry );
				observer.unobserve( entry.target );
			} );
		}, opts );

		io.observe( el );
	}

	// ─── 1. Heading word-reveal ───────────────────────────────────────────────

	/**
	 * Splits an element's text into per-word spans, preserving inline children.
	 *
	 * Structure per word:
	 *   <span style="overflow:hidden">   ← clips during animation
	 *     <span class="gsap-word">…</span>
	 *   </span>
	 *
	 * @param  {Element}   el
	 * @returns {Element[]} Inner .gsap-word spans to animate.
	 */
	function splitIntoWordSpans( el ) {
		var wordSpans = [];
		var nodes     = Array.prototype.slice.call( el.childNodes );

		nodes.forEach( function ( node ) {
			if ( node.nodeType === Node.TEXT_NODE ) {
				var parts    = node.textContent.split( /(\s+)/ );
				var fragment = document.createDocumentFragment();

				parts.forEach( function ( part ) {
					if ( ! part.trim() ) {
						fragment.appendChild( document.createTextNode( part ) );
						return;
					}

					var outer = document.createElement( 'span' );
					outer.style.cssText =
						'display:inline-block;overflow:hidden;' +
						'vertical-align:bottom;line-height:inherit;';

					var inner = document.createElement( 'span' );
					inner.className    = 'gsap-word';
					inner.style.cssText = 'display:inline-block;will-change:transform;';
					inner.textContent  = part;

					outer.appendChild( inner );
					fragment.appendChild( outer );
					wordSpans.push( inner );
				} );

				node.parentNode.replaceChild( fragment, node );

			} else if ( node.nodeType === Node.ELEMENT_NODE ) {
				var childSpans = splitIntoWordSpans( node );
				wordSpans      = wordSpans.concat( childSpans );
			}
		} );

		return wordSpans;
	}

	// ─── Wait for DOM ready ──────────────────────────────────────────────────

	document.addEventListener( 'DOMContentLoaded', function () {

		// ── 1a. Heading word reveal ──────────────────────────────────────────

		var headings = document.querySelectorAll( 'main .wp-block-heading' );

		headings.forEach( function ( heading ) {
			var wordSpans = splitIntoWordSpans( heading );
			if ( ! wordSpans.length ) return;

			// Words start below the overflow:hidden clip — heading looks empty.
			gsap.set( wordSpans, { y: '110%' } );

			// Now safe to reveal the heading element itself: text is clipped,
			// so there is no flash of visible content before the animation runs.
			gsap.set( heading, { opacity: 1 } );

			observeOnce(
				heading,
				function () {
					// expo.out: fast off the mark, silky deceleration.
					gsap.to( wordSpans, {
						y:          '0%',
						duration:   0.8,
						stagger:    0.055,
						ease:       'expo.out',
						clearProps: 'transform',
					} );
				},
				{ threshold: 0.3, rootMargin: '0px 0px -40px 0px' }
			);
		} );

		// ── 2. Service card grid cascade ──────────────────────────────────────
		// Targets: direct .wp-block-group children of any .wp-block-group.grid
		// container inside <main>. This matches the services-cards-grid and
		// services-grid patterns.

		var cardGrids = document.querySelectorAll( 'main .wp-block-group.grid' );

		cardGrids.forEach( function ( grid ) {
			var cards = Array.prototype.slice.call(
				grid.querySelectorAll( ':scope > .wp-block-group' )
			);
			if ( ! cards.length ) return;

			gsap.set( cards, { opacity: 0, y: 44 } );

			observeOnce(
				grid,
				function () {
					gsap.to( cards, {
						opacity:    1,
						y:          0,
						duration:   0.65,
						stagger:    0.1,
						ease:       'power3.out',
						clearProps: 'transform,opacity',
					} );
				},
				{ threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
			);
		} );

		// ── 3. Process steps sequential reveal ───────────────────────────────
		// Groups all .cac-process-step siblings by their parent so the stagger
		// triggers as a coordinated cascade when the section scrolls into view.

		var steps = document.querySelectorAll( 'main .cac-process-step' );

		if ( steps.length ) {
			var parentMap = new Map();

			steps.forEach( function ( step ) {
				var parent = step.parentElement;
				if ( ! parentMap.has( parent ) ) parentMap.set( parent, [] );
				parentMap.get( parent ).push( step );
			} );

			parentMap.forEach( function ( stepList, container ) {
				gsap.set( stepList, { opacity: 0, x: -28 } );

				observeOnce(
					container,
					function () {
						gsap.to( stepList, {
							opacity:    1,
							x:          0,
							duration:   0.7,
							stagger:    0.15,
							ease:       'power3.out',
							clearProps: 'transform,opacity',
						} );
					},
					{ threshold: 0.15, rootMargin: '0px 0px -30px 0px' }
				);
			} );
		}

	} );

} )();
