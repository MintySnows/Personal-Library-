document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Here you'd normally send the form data to a server
    console.log("Email:", email);
    console.log("Password:", password);
    alert("Sign Up Successful!");
});

document.getElementById("cancel-button").addEventListener("click", function() {
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
});
