<?php
/**
 * Icon helper — inline SVG registry.
 *
 * Usage:
 *   Icon::render( Icon::PHONE );
 *   Icon::render( Icon::PHONE, [ 'class' => 'w-4 h-4', 'aria-hidden' => 'true' ] );
 *   $html = Icon::get( Icon::CLOCK, [ 'class' => 'icon-clock' ] );
 *
 * All SVGs use viewBox="0 0 24 24" with stroke="currentColor" so they inherit
 * the current text colour and are sized via CSS (e.g. width / height / font-size).
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Icon {

	// -------------------------------------------------------------------------
	// Icon name constants — use these in templates for IDE autocompletion.
	// -------------------------------------------------------------------------

	const PHONE          = 'phone';
	const MAP_PIN        = 'map-pin';
	const CLOCK          = 'clock';
	const MAIL           = 'mail';
	const CALENDAR       = 'calendar';
	const CHECK          = 'check';
	const CHECK_CIRCLE   = 'check-circle';
	const ARROW_RIGHT    = 'arrow-right';
	const CHEVRON_RIGHT  = 'chevron-right';
	const CHEVRON_DOWN   = 'chevron-down';
	const STAR           = 'star';
	const STAR_FILLED    = 'star-filled';
	const SHIELD         = 'shield';
	const HEART          = 'heart';
	const CLOSE          = 'close';
	const EXTERNAL_LINK  = 'external-link';
	const INFO           = 'info';
	const ALERT_CIRCLE   = 'alert-circle';
	const USER           = 'user';
	const USERS          = 'users';
	const CAR            = 'car';
	const CLIPBOARD      = 'clipboard';
	const AWARD          = 'award';

	// Medical / clinic icons
	const HEART_PULSE    = 'heart-pulse';
	const PILL           = 'pill';
	const STETHOSCOPE    = 'stethoscope';
	const TOOTH          = 'tooth';

	// Prevent instantiation.
	private function __construct() {}

	// -------------------------------------------------------------------------
	// Public API
	// -------------------------------------------------------------------------

	/**
	 * Returns the SVG markup for an icon, with optional attributes injected.
	 *
	 * @param  string  $name  One of the Icon::* constants.
	 * @param  array   $attrs Associative array of HTML attributes to add to <svg>.
	 *                        Allowed keys: class, width, height, aria-hidden,
	 *                        aria-label, focusable, role, id, style, title.
	 *                        Defaults: aria-hidden="true", focusable="false".
	 * @return string         Safe SVG markup, or empty string if icon not found.
	 */
	public static function get( string $name, array $attrs = [] ): string {
		$library = self::library();

		if ( ! array_key_exists( $name, $library ) ) {
			return '';
		}

		$svg = $library[ $name ];

		// Merge caller attrs over sensible defaults.
		$attrs = array_merge(
			[
				'aria-hidden' => 'true',
				'focusable'   => 'false',
			],
			$attrs
		);

		// Build a safe attribute string (allowlist prevents arbitrary injection).
		$allowed_keys = [
			'class', 'width', 'height',
			'aria-hidden', 'aria-label', 'aria-labelledby',
			'focusable', 'role', 'id', 'style', 'title',
		];

		$attr_str = '';
		foreach ( $attrs as $key => $value ) {
			if ( in_array( $key, $allowed_keys, true ) ) {
				$attr_str .= ' ' . esc_attr( $key ) . '="' . esc_attr( $value ) . '"';
			}
		}

		// Inject attributes directly after the opening <svg token.
		return (string) preg_replace( '/<svg\b/', '<svg' . $attr_str, $svg, 1 );
	}

	/**
	 * Echoes the SVG markup for an icon.
	 *
	 * @param string $name  One of the Icon::* constants.
	 * @param array  $attrs Optional HTML attributes (see get()).
	 */
	public static function render( string $name, array $attrs = [] ): void {
		// phpcs:ignore WordPress.Security.EscapeOutput -- SVG is assembled from trusted internal data.
		echo self::get( $name, $attrs );
	}

	// -------------------------------------------------------------------------
	// SVG Library
	// All paths sourced from Lucide Icons (https://lucide.dev) — MIT License.
	// viewBox="0 0 24 24", stroke="currentColor", stroke-width="2",
	// stroke-linecap="round", stroke-linejoin="round", fill="none".
	// -------------------------------------------------------------------------

	private static function library(): array {
		static $cache = null;

		if ( $cache !== null ) {
			return $cache;
		}

		$s = 'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"';

		$cache = [

			self::PHONE => "<svg {$s}><path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.93 13.5 19.79 19.79 0 0 1 1.88 4.9a2 2 0 0 1 1.99-2.17h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.4a16 16 0 0 0 6.29 6.29l.88-.88a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/></svg>",

			self::MAP_PIN => "<svg {$s}><path d=\"M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/></svg>",

			self::CLOCK => "<svg {$s}><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>",

			self::MAIL => "<svg {$s}><rect width=\"20\" height=\"16\" x=\"2\" y=\"4\" rx=\"2\"/><path d=\"m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7\"/></svg>",

			self::CALENDAR => "<svg {$s}><rect width=\"18\" height=\"18\" x=\"3\" y=\"4\" rx=\"2\" ry=\"2\"/><line x1=\"16\" x2=\"16\" y1=\"2\" y2=\"6\"/><line x1=\"8\" x2=\"8\" y1=\"2\" y2=\"6\"/><line x1=\"3\" x2=\"21\" y1=\"10\" y2=\"10\"/></svg>",

			self::CHECK => "<svg {$s}><path d=\"M20 6 9 17l-5-5\"/></svg>",

			self::CHECK_CIRCLE => "<svg {$s}><path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"/><path d=\"m22 4-10 10.01-3-3\"/></svg>",

			self::ARROW_RIGHT => "<svg {$s}><path d=\"M5 12h14\"/><path d=\"m12 5 7 7-7 7\"/></svg>",

			self::CHEVRON_RIGHT => "<svg {$s}><path d=\"m9 18 6-6-6-6\"/></svg>",

			self::CHEVRON_DOWN => "<svg {$s}><path d=\"m6 9 6 6 6-6\"/></svg>",

			self::STAR => "<svg {$s}><polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/></svg>",

			self::STAR_FILLED => "<svg {$s} fill=\"currentColor\"><polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/></svg>",

			self::SHIELD => "<svg {$s}><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>",

			self::HEART => "<svg {$s}><path d=\"M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 1.5C10.5 3.5 9.26 3 7.5 3A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7z\"/></svg>",

			self::CLOSE => "<svg {$s}><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg>",

			self::EXTERNAL_LINK => "<svg {$s}><path d=\"M15 3h6v6\"/><path d=\"M10 14 21 3\"/><path d=\"M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6\"/></svg>",

			self::INFO => "<svg {$s}><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 16v-4\"/><path d=\"M12 8h.01\"/></svg>",

			self::ALERT_CIRCLE => "<svg {$s}><circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" x2=\"12\" y1=\"8\" y2=\"12\"/><line x1=\"12\" x2=\"12.01\" y1=\"16\" y2=\"16\"/></svg>",

			self::USER => "<svg {$s}><path d=\"M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2\"/><circle cx=\"12\" cy=\"7\" r=\"4\"/></svg>",

			self::USERS => "<svg {$s}><path d=\"M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M22 21v-2a4 4 0 0 0-3-3.87\"/><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/></svg>",

			self::CAR => "<svg {$s}><path d=\"M19 17H5v-5L7 6h10l2 6v5Z\"/><circle cx=\"7.5\" cy=\"17.5\" r=\"1.5\"/><circle cx=\"16.5\" cy=\"17.5\" r=\"1.5\"/></svg>",

			self::CLIPBOARD => "<svg {$s}><rect width=\"8\" height=\"4\" x=\"8\" y=\"2\" rx=\"1\" ry=\"1\"/><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"/></svg>",

			self::AWARD => "<svg {$s}><circle cx=\"12\" cy=\"8\" r=\"6\"/><path d=\"M15.477 12.89 17 22l-5-3-5 3 1.523-9.11\"/></svg>",

			// Lucide heart-pulse (MIT)
			self::HEART_PULSE => "<svg {$s}><path d=\"M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 1.5C10.5 3.5 9.26 3 7.5 3A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z\"/><path d=\"M3.22 12H9.5l1.5-1.5 2 2.5 1.5-2 1.5 2 1-1.5 2 2H21\"/></svg>",

			// Lucide pill (MIT)
			self::PILL => "<svg {$s}><path d=\"m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z\"/><path d=\"m8.5 8.5 7 7\"/></svg>",

			// Simplified stethoscope: earpieces + arched tubing + stem + chest piece
			self::STETHOSCOPE => "<svg {$s}><path d=\"M7 2V7a5 5 0 0 0 10 0V2\"/><path d=\"M12 12v6\"/><circle cx=\"12\" cy=\"21\" r=\"2\"/></svg>",

			// Simplified tooth: crown tapering to dual roots
			self::TOOTH => "<svg {$s}><path d=\"M12 2C8.5 2 6 4.5 6 7.5c0 2 .5 3.5 1.5 5 .5 1 .5 2.5.5 4 0 1.5.8 2.5 2 2.5.8 0 1.3-.6 1.5-1.5.2.9.7 1.5 1.5 1.5 1.2 0 2-1 2-2.5 0-1.5 0-3 .5-4 1-1.5 1.5-3 1.5-5C18 4.5 15.5 2 12 2z\"/></svg>",

		];

		return $cache;
	}
}

