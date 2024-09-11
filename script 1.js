document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        let username = document.getElementById("reg-username").value;
        let email = document.getElementById("reg-email").value;
        let password = document.getElementById("reg-password").value;
        let confirmPassword = document.getElementById("reg-confirm-password").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            event.preventDefault();
        }
    });

    document.getElementById("loginForm").addEventListener("submit", function(event) {
        let username = document.getElementById("login-username").value;
        let password = document.getElementById("login-password").value;

        if (username.trim() === "" || password.trim() === "") {
            alert("Both fields are required!");
            event.preventDefault();
        }
    });
