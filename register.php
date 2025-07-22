<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Nunito&display=swap" rel="stylesheet">
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
  <div class="left-side">
    <img src="assets/login.svg" alt="Students raising hands" />
  </div>

  <div class="right-side">
    <div class="form-box">
      <h3>Welcome to Bridgeloop</h3>
      <div class="tab-switch">
        <div class="tab-highlight" id="tab-highlight"></div>
        <button class="tab-btn" id="login-tab">Login</button>
        <button class="tab-btn" id="register-tab">Register</button>
      </div>
      <p class="form-desc">Bridgeloop: Your gateway to connect, learn, and share.</p>

      <form id="registerForm">
        <div class="form-field">
          <input type="text" id="name" placeholder="Enter your Name" required />
          <span class="error"></span>
        </div>
        <div class="form-field">
          <input type="email" id="email" placeholder="Enter your Email Address" required />
          <span class="error"></span>
        </div>
        <div class="form-field">
          <input type="tel" id="mobile" placeholder="Enter your Mobile Number" required />
          <span class="error"></span>
        </div>
        <div class="form-field">
          <input type="text" id="college" placeholder="Enter your College Name" required />
          <span class="error"></span>
        </div>
        <div class="form-field">
          <input type="password" id="password" placeholder="Enter your Password" required />
          <span class="error"></span>
        </div>

        <button type="submit" class="register-btn">Register</button>
        <p id="successMessage" style="color: green; font-weight: 600;"></p>
      </form>
    </div>
  </div>
</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>
