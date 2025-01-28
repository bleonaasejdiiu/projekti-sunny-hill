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
         <form action="register.php" method="POST">
        <div id="login-form" class="form active" >
          
            <h2>Login</h2>
            <input type="text" id="login-email" name="login-email" placeholder="Enter your Email" required>
            <div id="login-email-error" class="error-message"></div>
            <input type="password" id="login-password" name="login-password" placeholder="Enter your password" required>
            <div id="login-password-error" class="error-message"></div>
            <div class="options">
                <label><input type="checkbox"> Remember Me</label>
            </div>
            <input type="submit" class="btn" value="Log In" name="login-btn">
            <p>Don't have an account? <span id="show-signup" >Sign Up</span></p>
      
        </div>  
    </form>
    
        <!-- Sign Up Form -->
         <form action="register.php" method="POST">
        <div id="signup-form" class="form" name="signup-form">
        
            <h2>Sign Up</h2>
            <input type="text" id="signup-username" name="signup-username" placeholder="Enter your username" required>
            <input type="email" id="signup-email" name="signup-email" placeholder="Enter your email" required>
            <div id="signup-email-error" class="error-message"></div>
            <input type="password" id="signup-password" name="signup-password" placeholder="Create password" required>
            <div id="signup-password-error" class="error-message"></div>
            <input type="password" id="confirm-password" placeholder="Confirm password" required>
            <div id="confirm-password-error" class="error-message"></div>

            <input type="submit" class="btn" value="Sign Up" name="signup-btn">

            <p>Already have an account? <span id="show-login">Login</span></p>
        
        </div>
    </form>
    </div>
  
        <script src="script.js"></script>
</body>
</html>