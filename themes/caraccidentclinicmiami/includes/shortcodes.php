<?php
/**
 * Shortcode definitions for Car Accident Clinic Miami.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

/**
 * Renders the facilities video lightbox modal.
 *
 * Usage: [cac_facilities_modal]
 *
 * @return string Modal HTML and inline JS.
 */
function cac_render_facilities_modal_shortcode() {
	ob_start();
	?>
	<div id="cac-facilities-modal" role="dialog" aria-modal="true" aria-label="Video player" style="display:none;position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,0.85);align-items:center;justify-content:center;">
		<button onclick="window.closeCacFacilitiesModal&&window.closeCacFacilitiesModal()" aria-label="Close video" style="position:absolute;top:1.25rem;right:1.25rem;background:none;border:none;color:#fff;font-size:2rem;line-height:1;cursor:pointer;padding:0.5rem;">&times;</button>
		<div style="position:relative;width:100%;max-width:900px;padding:0 1rem;">
			<div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
				<iframe id="cac-facilities-video"
					src=""
					data-src="https://www.youtube.com/embed/VIDEO_ID?autoplay=1&amp;rel=0"
					allow="autoplay; encrypted-media"
					allowfullscreen
					title="Facilities video"
					style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;">
				</iframe>
			</div>
		</div>
	</div>
	<script>
	(function () {
		var modalId  = 'cac-facilities-modal';
		var videoId  = 'cac-facilities-video';

		function openModal() {
			var m = document.getElementById(modalId);
			var v = document.getElementById(videoId);
			if (!m || !v) return;
			v.src = v.getAttribute('data-src');
			m.style.display = 'flex';
			document.body.style.overflow = 'hidden';
		}

		function closeModal() {
			var m = document.getElementById(modalId);
			var v = document.getElementById(videoId);
			if (!m || !v) return;
			m.style.display = 'none';
			v.src = '';
			document.body.style.overflow = '';
		}

		window.openCacFacilitiesModal  = openModal;
		window.closeCacFacilitiesModal = closeModal;

		document.addEventListener('click', function (e) {
			if (e.target === document.getElementById(modalId)) closeModal();
		});

		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') closeModal();
		});
	}());
	</script>
	<?php
	return ob_get_clean();
}
add_shortcode( 'cac_facilities_modal', 'cac_render_facilities_modal_shortcode' );

/**
 * Renders the facilities video play button.
 *
 * Usage: [cac_facilities_play_button]
 *
 * @return string Button HTML.
 */
function cac_render_facilities_play_button_shortcode() {
	return '<button onclick="window.openCacFacilitiesModal&&window.openCacFacilitiesModal()" aria-label="Play video" style="position:absolute;top:1rem;right:1rem;background:rgba(255,255,255,0.95);border:none;padding:0.625rem 1.125rem;cursor:pointer;display:inline-flex;align-items:center;gap:0.5rem;font-weight:600;font-size:0.8125rem;color:#111827;border-radius:3px;box-shadow:0 1px 4px rgba(0,0,0,0.18);z-index:10;"><svg width="10" height="12" viewBox="0 0 10 12" fill="currentColor" aria-hidden="true"><path d="M0 0v12l10-6L0 0z"/></svg>Play Video</button>';
}
add_shortcode( 'cac_facilities_play_button', 'cac_render_facilities_play_button_shortcode' );
