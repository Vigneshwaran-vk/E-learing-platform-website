function togglePassword(fieldId, icon) {
  const field = document.getElementById(fieldId);
  const type = field.getAttribute("type");
  field.setAttribute("type", type === "password" ? "text" : "password");
  icon.textContent = type === "password" ? "🙈" : "👁️";
}

const loginTab = document.getElementById('login-tab');
const registerTab = document.getElementById('register-tab');
const tabHighlight = document.getElementById('tab-highlight');

const isLogin = window.location.pathname.includes('login');

window.addEventListener('DOMContentLoaded', () => {
  if (isLogin) {
    tabHighlight.style.left = '0%';
    loginTab.classList.add('active');
    registerTab.classList.remove('active');
  } else {
    tabHighlight.style.left = '50%';
    loginTab.classList.remove('active');
    registerTab.classList.add('active');
  }

  loginTab.addEventListener('click', () => {
    if (!isLogin) {
      tabHighlight.style.left = '0%';
      loginTab.classList.add('active');
      registerTab.classList.remove('active');

      setTimeout(() => {
        window.location.href = 'login.php';
      }, 800); 
    }
  });

  registerTab.addEventListener('click', () => {
    if (isLogin) {
      tabHighlight.style.left = '50%';
      registerTab.classList.add('active');
      loginTab.classList.remove('active');

      setTimeout(() => {
        window.location.href = 'register.php';
      }, 800); 
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registerForm");
  const fields = ["name", "email", "mobile", "college", "password", "confirmPassword"];
  const successMessage = document.getElementById("successMessage");

  let submittedOnce = false;

  function validateField(id) {
    const input = document.getElementById(id);
    const errorSpan = input.parentElement.querySelector(".error");

    if (input.value.trim() === "") {
      errorSpan.textContent = "* required";
      return false;
    } else {
      errorSpan.textContent = "";
      return true;
    }
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    submittedOnce = true;
    let isValid = true;

    fields.forEach((id) => {
      const valid = validateField(id);
      if (!valid) isValid = false;
    });

    if (isValid) {
      successMessage.textContent = "Form submitted successfully!";
    } else {
      successMessage.textContent = "";
    }
  });

  fields.forEach((id) => {
    const input = document.getElementById(id);
    input.addEventListener("input", () => {
      if (submittedOnce) {
        validateField(id);
      }
    });
  });
});

$(document).ready(function () {
  let submittedOnce = false;

  const fields = [
    "#name",
    "#email",
    "#mobile",
    "#college",
    "#password",
    "#confirmPassword"
  ];

  function validateField(selector) {
    const $input = $(selector);
    const $error = $input.siblings(".error");

    if ($input.val().trim() === "") {
      $error.text("* required");
      return false;
    } else {
      $error.text("");
      return true;
    }
  }

  $("#registerForm").on("submit", function (e) {
    e.preventDefault();
    submittedOnce = true;

    let isValid = true;
    fields.forEach((selector) => {
      if (!validateField(selector)) isValid = false;
    });

    if (isValid) {
      $("#successMessage").text("Form submitted successfully!");
    } else {
      $("#successMessage").text("");
    }
  });

  fields.forEach((selector) => {
    $(selector).on("input", function () {
      if (submittedOnce) {
        validateField(selector);
      }
    });
  });
});

$(document).ready(function () {
  const loginFields = ["#loginEmail", "#loginPassword"];
  let loginSubmitted = false;

  function validateLoginField(selector) {
    const $input = $(selector);
    const $error = $input.siblings(".error");

    if ($input.val().trim() === "") {
      $error.text("* required");
      return false;
    } else {
      $error.text("");
      return true;
    }
  }

  $("#loginForm").on("submit", function (e) {
    e.preventDefault();
    loginSubmitted = true;

    let isValid = true;
    loginFields.forEach((selector) => {
      if (!validateLoginField(selector)) isValid = false;
    });

    if (isValid) {
      $("#loginSuccessMessage").text("Form submitted successfully!");
    } else {
      $("#loginSuccessMessage").text("");
    }
  });

  loginFields.forEach((selector) => {
    $(selector).on("input", function () {
      if (loginSubmitted) {
        validateLoginField(selector);
      }
    });
  });
});





