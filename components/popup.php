<?php
require_once __DIR__ . '/../config.php';
/** @var string $BASE_URL */
?>
<!-- components/popup.php -->
<div id="servicePopupOverlay" class="popup-overlay">
  <div class="popup-box">
    <span id="servicePopupClose" class="popup-close">&times;</span>
    <h2 class="popup-heading">Book a Quick Call <span>&amp; Let's Get Started</span></h2>

    <form id="popup-form" class="popup-form" action="<?= $BASE_URL ?>assets/popup-mail.php" method="POST">
      <div style="position:absolute; left:-9999px;" aria-hidden="true">
        <label for="popup-website">Leave this field empty</label>
        <input type="text" name="website" id="popup-website" tabindex="-1" autocomplete="off">
      </div>
      <div class="popup-row">
        <input type="text" name="name" placeholder="Name" class="popup-input popup-field" id="popup-name" required>
      </div>
      <div class="popup-row two">
        <input type="email" name="email" placeholder="Email" class="popup-input popup-field" id="popup-email" required>
        <input type="tel" name="phone" placeholder="Phone" class="popup-input popup-field" id="popup-phone" required>
      </div>
      <div class="popup-row">
        <select class="popup-select popup-field" name="service" id="popup-service" required>
          <option value="">Select a Service</option>
          <option>Audiobook Production</option>
          <option>Author Website</option>
          <option>Proofreading & Editing</option>
          <option>Book Publishing</option>
          <option>Book Ghostwriting</option>
          <option>Book Marketing</option>
          <option>Book Illustration</option>
          <option>Book Cover Design</option>
          <option>Book Formatting</option>
        </select>
      </div>
      <div class="popup-row">
        <textarea placeholder="Message" name="message" class="popup-textarea popup-field" id="popup-message" required></textarea>
      </div>
      <div class="popup-row">
        <button type="submit" class="popup-btn" id="popup-submit">Send</button>
      </div>
      <p class="popup-response"></p>
    </form>
  </div>
</div>

<style>
/* =======================
   Custom Popup Styling
   ======================= */
.popup-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(10, 17, 25, 0.6);
  backdrop-filter: blur(3px);
  z-index: 99999;
  justify-content: center;
  align-items: center;
  padding: 24px;
}

.popup-box {
  width: 620px;
  max-width: 100%;
  max-height: 90vh;
  overflow-y: auto;
  background: var(--td-common-white);
  border-radius: 16px;
  color: var(--td-common-black);
  padding: 50px 55px;
  box-shadow: 0 25px 60px rgba(10, 17, 25, 0.35);
  position: relative;
}

.popup-heading {
  font-weight: 800;
  font-size: 32px;
  line-height: 1.25;
  letter-spacing: -0.02em;
  text-align: center;
  margin-bottom: 30px;
  color: var(--td-common-black);
}

.popup-heading span {
  font-family: var(--td-ff-dm);
  font-style: italic;
  font-weight: 400;
  color: var(--td-theme-primary);
}

.popup-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.popup-row.two {
  display: flex;
  gap: 15px;
}

.popup-field {
  width: 100%;
  height: 56px;
  padding: 0 18px;
  border: 1px solid rgba(10, 17, 25, 0.12) !important;
  border-radius: 8px;
  background: var(--td-common-white);
  color: var(--td-common-black);
  font-family: var(--td-ff-body);
  font-size: 15px;
  outline: none;
  transition: border-color 0.3s ease;
}

select.popup-field {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding-right: 44px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8' fill='none'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%230A1119' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 18px center;
}

.popup-field::placeholder {
  color: rgba(10, 17, 25, 0.45);
  font-family: var(--td-ff-body);
}

.popup-field:focus {
  border-color: var(--td-theme-primary);
}

.popup-textarea {
  height: 110px;
  padding: 16px 18px;
  resize: none;
}

.popup-btn {
  width: 100%;
  height: 58px;
  background: var(--td-theme-primary);
  color: var(--td-common-white) !important;
  border: none;
  border-radius: 30px;
  font-family: var(--td-ff-body);
  font-size: 15px;
  font-weight: 700;
  letter-spacing: 0.02em;
  cursor: pointer;
  transition: filter 0.3s ease;
  text-transform: uppercase;
}

.popup-btn:hover {
  filter: brightness(0.85);
}

.popup-response {
  margin: 0;
  font-size: 14px;
  text-align: center;
}

.popup-response.success {
  color: #2e7d32;
}

.popup-response.error {
  color: #d32f2f;
}

.popup-close {
  position: absolute;
  top: 18px;
  right: 20px;
  width: 34px;
  height: 34px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(10, 17, 25, 0.06);
  font-size: 22px;
  line-height: 1;
  cursor: pointer;
  color: var(--td-common-black);
  font-weight: normal;
  transition: background 0.25s ease;
}

.popup-close:hover {
  background: rgba(10, 17, 25, 0.12);
}

@media (max-width: 767px) {
  .popup-box {
    padding: 36px 24px;
  }

  .popup-heading {
    font-size: 24px;
  }

  .popup-row.two {
    flex-direction: column;
    gap: 18px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get the popup elements
  const popup = document.getElementById('servicePopupOverlay');
  const closeBtn = document.getElementById('servicePopupClose');
  const openBtn = document.getElementById('openServicePopup');
  
  // Function to open popup
  function openPopup() {
    popup.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent scrolling when popup is open
  }
  
  // Function to close popup
  function closePopup() {
    popup.style.display = 'none';
    document.body.style.overflow = ''; // Restore scrolling
  }
  
  // Event listeners
  if (openBtn) {
    openBtn.addEventListener('click', openPopup);
  }
  
  if (closeBtn) {
    closeBtn.addEventListener('click', closePopup);
  }
  
  // Close popup when clicking outside the popup box
  popup.addEventListener('click', function(e) {
    if (e.target === popup) {
      closePopup();
    }
  });

  // Submit the popup form via AJAX, same pattern as the main contact form.
  const popupForm = document.getElementById('popup-form');
  const popupResponse = popupForm.querySelector('.popup-response');

  popupForm.addEventListener('submit', function(e) {
    e.preventDefault();

    fetch(popupForm.getAttribute('action'), {
      method: 'POST',
      body: new FormData(popupForm)
    })
      .then(function(response) {
        return response.text().then(function(text) {
          return { ok: response.ok, text: text };
        });
      })
      .then(function(result) {
        popupResponse.classList.toggle('success', result.ok);
        popupResponse.classList.toggle('error', !result.ok);
        popupResponse.textContent = result.text;
        if (result.ok) {
          popupForm.reset();
        }
      })
      .catch(function() {
        popupResponse.classList.remove('success');
        popupResponse.classList.add('error');
        popupResponse.textContent = 'Oops! An error occurred and your message could not be sent.';
      });
  });
});
</script>
