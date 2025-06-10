document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    alert(`Logging in with Email: ${email}`);
    // Add authentication logic here
});

document.getElementById('signupBtn').addEventListener('click', function() {
    alert('Sign Up button clicked!');
    // Add sign-up logic here
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    document.getElementById('loginForm').reset();
});
