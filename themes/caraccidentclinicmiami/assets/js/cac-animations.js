/**
 * cac-animations.js
 *
 * Subtle entrance animations for section headings.
 * Words slide up and fade in from below as each heading enters the viewport.
 * Animates once per heading, then stops observing.
 * Fully skipped when the user has requested reduced motion.
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

	/**
	 * Splits an element's text content into per-word spans, preserving any
	 * inline child elements (e.g. <a>, <strong>, <em>).
	 *
	 * Each word is wrapped in:
	 *   <span style="overflow:hidden"> ← clips the sliding word
	 *     <span class="gsap-word">word</span>  ← the animated element
	 *   </span>
	 *
	 * @param {Element} el
	 * @returns {Element[]} Array of inner .gsap-word spans to animate.
	 */
	function splitIntoWordSpans( el ) {
		var wordSpans = [];

		// Work on a snapshot of child nodes because we mutate the DOM in the loop.
		var nodes = Array.prototype.slice.call( el.childNodes );

		nodes.forEach( function ( node ) {
			if ( node.nodeType === Node.TEXT_NODE ) {
				var text  = node.textContent;
				var parts = text.split( /(\s+)/ ); // keeps whitespace tokens
				var fragment = document.createDocumentFragment();

				parts.forEach( function ( part ) {
					if ( ! part.trim() ) {
						// Plain whitespace — keep as-is so words don't collapse.
						fragment.appendChild( document.createTextNode( part ) );
						return;
					}

					var outer = document.createElement( 'span' );
					outer.style.cssText = 'display:inline-block;overflow:hidden;vertical-align:bottom;line-height:inherit;';

					var inner = document.createElement( 'span' );
					inner.className  = 'gsap-word';
					inner.style.cssText = 'display:inline-block;';
					inner.textContent = part;

					outer.appendChild( inner );
					fragment.appendChild( outer );
					wordSpans.push( inner );
				} );

				node.parentNode.replaceChild( fragment, node );

			} else if ( node.nodeType === Node.ELEMENT_NODE ) {
				// Recursively split words inside inline elements (links, bold, etc.).
				var childSpans = splitIntoWordSpans( node );
				wordSpans = wordSpans.concat( childSpans );
			}
		} );

		return wordSpans;
	}

	// ─── Wait for DOM ready ──────────────────────────────────────────────────

	document.addEventListener( 'DOMContentLoaded', function () {

		// Target headings inside <main> content only — excludes header and footer.
		var headings = document.querySelectorAll(
			'main .wp-block-heading'
		);

		if ( ! headings.length ) {
			return;
		}

		// Map each heading element → its array of word spans.
		var headingWordMap = new Map();

		headings.forEach( function ( heading ) {
			var wordSpans = splitIntoWordSpans( heading );

			if ( ! wordSpans.length ) {
				return;
			}

			// Set initial hidden state — words sit below the clip boundary.
			gsap.set( wordSpans, { y: '105%', opacity: 0 } );

			headingWordMap.set( heading, wordSpans );
		} );

		if ( ! headingWordMap.size ) {
			return;
		}

		// ─── IntersectionObserver ────────────────────────────────────────────

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( ! entry.isIntersecting ) {
						return;
					}

					var wordSpans = headingWordMap.get( entry.target );
					if ( ! wordSpans ) {
						return;
					}

					// Animate words up into view, staggered left → right.
					gsap.to( wordSpans, {
						y: '0%',
						opacity: 1,
						duration: 0.65,
						stagger: 0.04,
						ease: 'power2.out',
						clearProps: 'transform,opacity', // clean up inline styles once done
					} );

					// Trigger once only.
					observer.unobserve( entry.target );
					headingWordMap.delete( entry.target );
				} );
			},
			{
				// Fire when 25% of the heading is visible and at least 40px
				// above the bottom edge of the viewport — avoids firing too late.
				threshold: 0.25,
				rootMargin: '0px 0px -40px 0px',
			}
		);

		headingWordMap.forEach( function ( _spans, heading ) {
			observer.observe( heading );
		} );
	} );

} )();
