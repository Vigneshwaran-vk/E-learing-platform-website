<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,700&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>

<header class="animated-navbar">
  <div class="nav-container">
    <div class="logo">
      <img src="assets/Logo.jpeg" alt="Bridgeloop Logo" />
    </div>
    <nav class="nav-menu">
      <a href="landing.html">Home</a>
      <a href="#about">About</a>
      <a href="#courses">Courses</a>
      <a href="#contact">Contact</a>
      <a href="#features">Features</a>
    </nav>
  </div>
</header>

<div class="container">
  <!-- Left Image Section -->
  <div class="left-side">
    <img src="assets/login.svg" alt="Students raising hands" />
  </div>

  <!-- Right Login Form -->
  <div class="right-side">
    <div class="form-box">
      <h3>Welcome to Bridgeloop</h3>
      <div class="tab-switch">
        <div class="tab-highlight" id="tab-highlight"></div>
        <button class="tab-btn" id="login-tab">Login</button>
        <button class="tab-btn" id="register-tab">Register</button>
      </div>
      <p class="form-desc">Bridgeloop: Your gateway to connect, learn, and share.</p>

      <!-- ✅ Updated form -->
      <form id="loginForm">
      <input type="email" id="loginEmail" placeholder="Enter your Email" required />
        <div class="password-field">
        <input type="password" id="loginPassword" placeholder="Enter your Password" required />
        <span class="toggle-pass" onclick="togglePassword('loginPassword', this)">👁️</span>
        </div>
        <a href="#" class="forgot">Forgot your password?</a>
        <button class="register-btn" type="submit">Login</button>
      </form>
    </div>
  </div>
</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Optional: JS for show/hide password -->
<script>
function togglePassword(inputId, icon) {
  const input = document.getElementById(inputId);
  if (input.type === "password") {
    input.type = "text";
    icon.textContent = "🙈";
  } else {
    input.type = "password";
    icon.textContent = "👁️";
  }
}
</script>
<script>
document.getElementById("loginForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const email = document.getElementById("loginEmail").value.trim();
  const password = document.getElementById("loginPassword").value.trim();

  if (email !== "" && password !== "") {
    window.location.href = "dashboard.html";
  } else {
    alert("Please fill in both fields.");
  }
});
</script>


</body>
</html>
