


document.getElementById("login-btn").addEventListener("click", function(e) {
    e.preventDefault(); // Parandalon dërgimin e formës për të kontrolluar validimin

    let valid = true;

    // Login email validation
    let loginEmail = document.getElementById("login-email");
    let loginEmailError = document.getElementById("login-email-error");
    if (!loginEmail.value || !/\S+@\S+\.\S+/.test(loginEmail.value)) {
        loginEmail.classList.add("error");
        loginEmailError.textContent = "Please enter a valid email.";
        valid = false;
    } else {
        loginEmail.classList.remove("error");
        loginEmailError.textContent = "";
    }

    // Login password validation
    let loginPassword = document.getElementById("login-password");
    let loginPasswordError = document.getElementById("login-password-error");
    if (loginPassword.value.length < 6) {
        loginPassword.classList.add("error");
        loginPasswordError.textContent = "Password must be at least 6 characters.";
        valid = false;
    } else {
        loginPassword.classList.remove("error");
        loginPasswordError.textContent = "";
    }

    // If all fields are valid, proceed with login (or sign up logic)
    if (valid) {
        alert("Login successful!");
        // You can submit the form here if needed
    }
});

document.getElementById("signup-btn").addEventListener("click", function(e) {
    e.preventDefault();

    let valid = true;

    // Signup email validation
    let signupEmail = document.getElementById("signup-email");
    let signupEmailError = document.getElementById("signup-email-error");
    if (!signupEmail.value || !/\S+@\S+\.\S+/.test(signupEmail.value)) {
        signupEmail.classList.add("error");
        signupEmailError.textContent = "Please enter a valid email.";
        valid = false;
    } else {
        signupEmail.classList.remove("error");
        signupEmailError.textContent = "";
    }

    // Signup password validation
    let signupPassword = document.getElementById("signup-password");
    let signupPasswordError = document.getElementById("signup-password-error");
    if (signupPassword.value.length < 6) {
        signupPassword.classList.add("error");
        signupPasswordError.textContent = "Password must be at least 6 characters.";
        valid = false;
    } else {
        signupPassword.classList.remove("error");
        signupPasswordError.textContent = "";
    }

    // Confirm password validation
    let confirmPassword = document.getElementById("confirm-password");
    let confirmPasswordError = document.getElementById("confirm-password-error");
    if (confirmPassword.value !== signupPassword.value) {
        confirmPassword.classList.add("error");
        confirmPasswordError.textContent = "Passwords do not match.";
        valid = false;
    } else {
        confirmPassword.classList.remove("error");
        confirmPasswordError.textContent = "";
    }

    // If all fields are valid, proceed with signup
    if (valid) {
        alert("Sign up successful!");
        // You can submit the form here if needed
    }
});

