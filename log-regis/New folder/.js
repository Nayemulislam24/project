const loginForm = document.querySelector('#login-form');
const registerForm = document.querySelector('#register-form');

// Login Form Submission
loginForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const email = loginForm.email.value;
  const password = loginForm.password.value;
  // Perform login validation and authorization
  // Redirect to dashboard page upon successful login
});

// Register Form Submission
registerForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const name = registerForm.name.value;
  const email = registerForm.email.value;
  const password = registerForm.password.value;
  // Perform registration validation and authorization
  // Redirect to dashboard page upon successful registration
});
