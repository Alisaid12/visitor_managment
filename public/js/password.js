const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#form3Example4');
togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye icon
  this.querySelector('i').classList.toggle('fa-eye');
  this.querySelector('i').classList.toggle('fa-eye-slash');
});