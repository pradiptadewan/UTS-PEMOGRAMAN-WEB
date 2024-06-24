const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

// Fungsi untuk menampilkan form Sign Up dan menyembunyikan form Sign In
signUpButton.addEventListener('click', function() {
  signInForm.style.display = "none";  // Sembunyikan form login
  signUpForm.style.display = "flex";  // Tampilkan form register
});

// Fungsi untuk menampilkan form Sign In dan menyembunyikan form Sign Up
signInButton.addEventListener('click', function() {
  signInForm.style.display = "flex";  // Tampilkan form login
  signUpForm.style.display = "none";  // Sembunyikan form register
});

