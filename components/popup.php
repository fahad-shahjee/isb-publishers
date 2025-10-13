<!-- components/popup.php -->
<div id="servicePopupOverlay" class="popup-overlay">
  <div class="popup-box">
    <span id="servicePopupClose" class="popup-close">&times;</span>
    <h2 class="popup-heading">Book a Quick Call & Let's Get Started.</h2>

    <form class="popup-form">
      <div class="popup-row">
        <input type="text" placeholder="Name" class="popup-input" required>
      </div>
      <div class="popup-row two">
        <input type="email" placeholder="Email" class="popup-input" required>
        <input type="tel" placeholder="Phone" class="popup-input" required>
      </div>
      <div class="popup-row">
        <select class="popup-select" required>
          <option value="">Select a Service</option>
          <option>Ghostwriting</option>
          <option>Editing & Proofreading</option>
          <option>Illustration</option>
          <option>Publishing Strategy</option>
          <option>Marketing Plan</option>
        </select>
      </div>
      <div class="popup-row">
        <textarea placeholder="Message" class="popup-textarea" required></textarea>
      </div>
      <div class="popup-row">
        <button type="submit" class="popup-btn">Send</button>
      </div>
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
  background: url('./assets/img/popup/popup.jpg') center/cover no-repeat;
  border: 1px solid #2967aa;
  border-radius: 12px;
  color: #fff;
  padding: 40px 50px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.4);
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.popup-heading {
  font-size: 35px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 25px;
  color: #fff;
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

.popup-input, .popup-select, .popup-textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 6px;
  background: rgba(0,0,0,0.5);
  color: #fff;
  font-size: 15px;
  outline: none;
}

.popup-input::placeholder,
.popup-textarea::placeholder {
  color: rgba(255,255,255,0.6);
}

.popup-input:focus,
.popup-select:focus,
.popup-textarea:focus {
  border-color: #2967aa;
}

.popup-textarea {
  resize: none;
  height: 100px;
}

.popup-btn {
  background: linear-gradient(90deg, #007bff, #004d9d);
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 6px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
}

.popup-btn:hover {
  background: linear-gradient(90deg, #004d9d, #007bff);
}

.popup-close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  cursor: pointer;
  color: #fff;
  font-weight: bold;
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
});
</script>
