const loginForm = document.querySelector('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

loginForm.addEventListener('submit', (event) => {
  if (email.value == '') {
    event.preventDefault(); 
    email.style.backgroundColor='red';
  }
  if (password.value == '') {
    event.preventDefault(); 
    password.style.backgroundColor='red';
  }
});
