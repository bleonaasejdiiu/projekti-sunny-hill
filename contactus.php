<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

<nav class="navbar">
        <a href="home.php">Home</a>
        <a href="shows&events.html">Shows&Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.php">Log In</a>
    </nav>
      
    
    <section class="contact">
      
    </section>     
    
    <div class="form-container">
        <!-- Login Form -->
        <div id="login-form" class="form active">
            <h2>Login</h2>
            <input type="email" id="login-email" placeholder="Enter your email" required>
            <div id="login-email-error" class="error-message"></div>
            <input type="password" id="login-password" placeholder="Enter your password" required>
            <div id="login-password-error" class="error-message"></div>
            <div class="options">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button id="login-btn">Login Now</button>
            <p>Don't have an account? <span id="show-signup">Sign Up</span></p>
        </div>
    
        <!-- Sign Up Form -->
        <div id="signup-form" class="form">
            <h2>Sign Up</h2>
            <input type="email" id="signup-email" placeholder="Enter your email" required>
            <div id="signup-email-error" class="error-message"></div>
            <input type="password" id="signup-password" placeholder="Create password" required>
            <div id="signup-password-error" class="error-message"></div>
            <input type="password" id="confirm-password" placeholder="Confirm password" required>
            <div id="confirm-password-error" class="error-message"></div>
            <button id="signup-btn">Sign Up Now</button>
            <p>Already have an account? <span id="show-login">Login</span></p>
        </div>
    </div>
  
        <script src="script.js"></script>
</body>
</html>