<!-- components/popup.php -->
<div id="servicePopupOverlay" class="popup-overlay">
  <div class="popup-box">
    <span id="servicePopupClose" class="popup-close">&times;</span>
    <h2 class="popup-heading">Book a Quick Call & Let's Get Started.</h2>

    <form id="popup-form" class="popup-form" action="<?= $BASE_URL ?>assets/popup-mail.php" method="POST">
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
          <option>Ghostwriting</option>
          <option>Editing & Proofreading</option>
          <option>Illustration</option>
          <option>Publishing Strategy</option>
          <option>Marketing Plan</option>
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
  background: rgba(0,0,0,0.7);
  backdrop-filter: blur(3px);
  z-index: 99999;
  justify-content: center;
  align-items: center;
}

.popup-box {
  width: 690px;
  height: 540px;
  background: linear-gradient(135deg, rgba(19, 107, 172, 0.9), rgba(19, 107, 172, 0.7)), url('../assets/img/popup/popup.jpg') center/cover no-repeat;
  border: 1px solid var(--td-theme-primary);
  border-radius: 12px;
  color: var(--td-common-white);
  padding: 40px 50px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.4);
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.popup-heading {
  font-family: var(--td-ff-heading);
  font-size: 35px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 25px;
  color: var(--td-common-white);
}

.popup-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.popup-row.two {
  display: flex;
  gap: 15px;
}

.popup-field {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid var(--td-theme-primary);
  border-radius: 6px;
  background: var(--td-common-white);
  color: var(--td-grey-1);
  font-family: var(--td-ff-body);
  font-size: 15px;
  outline: none;
  transition: all 0.3s ease;
}

.popup-field::placeholder {
  color: var(--td-grey-1);
  font-family: var(--td-ff-body);
  opacity: 0.7;
}

.popup-field:focus {
  border-color: var(--td-theme-secondary);
  box-shadow: 0 0 5px rgba(19, 107, 172, 0.3);
}

.popup-textarea {
  resize: none;
  height: 100px;
}

.popup-btn {
  width: 100%;
  background: var(--td-theme-primary);
  color: var(--td-common-white) !important;
  border: none;
  padding: 14px;
  border-radius: 6px;
  font-family: var(--td-ff-heading);
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
  text-transform: uppercase;
}

.popup-btn:hover {
  background: var(--td-theme-secondary);
}

.popup-response {
  margin: 0;
  font-size: 14px;
}

.popup-response.success {
  color: #4caf50;
}

.popup-response.error {
  color: #ff6b6b;
}

.popup-close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  cursor: pointer;
  color: var(--td-common-white);
  font-weight: bold;
}

@media (max-width: 767px) {
  .popup-box {
    width: 90%;
    height: auto;
    padding: 30px 20px;
  }
  
  .popup-heading {
    font-size: 28px;
  }
  
  .popup-row.two {
    flex-direction: column;
    gap: 15px;
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
