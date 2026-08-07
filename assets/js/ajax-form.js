document.addEventListener('DOMContentLoaded', function() {

	// Get the form.
	var form = document.getElementById('contact-form');

	if (!form) {
		return;
	}

	// Get the messages element.
	var formMessages = form.querySelector('.ajax-response') || document.querySelector('.ajax-response');

	// Set up an event listener for the contact form.
	// Uses fetch() instead of jQuery's $.ajax (XMLHttpRequest-based) because some
	// antivirus/security software hooks XMLHttpRequest specifically and silently
	// blocks it, while leaving fetch() untouched.
	form.addEventListener('submit', function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		fetch(form.getAttribute('action'), {
			method: 'POST',
			body: new FormData(form)
		})
			.then(function(response) {
				return response.text().then(function(text) {
					return { ok: response.ok, text: text };
				});
			})
			.then(function(result) {
				formMessages.classList.toggle('success', result.ok);
				formMessages.classList.toggle('error', !result.ok);
				formMessages.textContent = result.text;

				if (result.ok) {
					form.querySelectorAll('input, textarea').forEach(function(field) {
						field.value = '';
					});
				}
			})
			.catch(function() {
				formMessages.classList.remove('success');
				formMessages.classList.add('error');
				formMessages.textContent = 'Oops! An error occured and your message could not be sent.';
			});
	});

});
