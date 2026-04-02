( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		const form = document.getElementById( 'cac-contact-form' );
		if ( ! form ) return;

		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			handleSubmit( form );
		} );
	} );

	function handleSubmit( form ) {
		const submitBtn = form.querySelector( '.cac-submit-btn' );
		const statusEl  = document.getElementById( 'cac-form-status' );
		const originalLabel = submitBtn.textContent;

		clearStatus( statusEl );
		submitBtn.disabled    = true;
		submitBtn.textContent = 'Sending\u2026';

		const data = new FormData( form );
		data.append( 'action', 'cac_contact_form' );
		data.append( 'nonce', cacContactForm.nonce );

		fetch( cacContactForm.ajaxUrl, {
			method: 'POST',
			credentials: 'same-origin',
			body: data,
		} )
			.then( function ( res ) {
				if ( ! res.ok && res.status !== 400 && res.status !== 403 && res.status !== 500 ) {
					throw new Error( 'Network error' );
				}
				return res.json();
			} )
			.then( function ( res ) {
				if ( res.success ) {
					setStatus( statusEl, res.data.message, 'success' );
					form.reset();
				} else {
					setStatus( statusEl, res.data.message, 'error' );
				}
			} )
			.catch( function () {
				setStatus( statusEl, 'An unexpected error occurred. Please try again.', 'error' );
			} )
			.finally( function () {
				submitBtn.disabled    = false;
				submitBtn.textContent = originalLabel;
			} );
	}

	function setStatus( el, message, type ) {
		if ( ! el ) return;
		el.textContent = message;
		el.className   = 'cac-form-status cac-form-status--' + type;
	}

	function clearStatus( el ) {
		if ( ! el ) return;
		el.textContent = '';
		el.className   = 'cac-form-status';
	}
} )();
