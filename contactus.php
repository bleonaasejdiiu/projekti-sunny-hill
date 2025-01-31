<?php
session_start();
include("connect_db.php");
include("Login.php"); // Përfshijmë klasën Login

// Inicimi i bazës së të dhënave
$database = new Database();
$conn = $database->connect();

// Krijimi i një objekti të klasës Login
$login = new Login($conn);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Autentifikimi i përdoruesit përmes metodës authenticate
    if ($login->authenticate($email, $password)) {
        echo "<div class='message success-message'>
                <p>Login successful! Redirecting...</p>
              </div>";
        echo "<script>setTimeout(function() { window.location.href = 'user_dashboard.php'; }, 3000);</script>";
    } else {
        echo "<div class='message'>
                <p>Wrong email or password. Please try again.</p>
              </div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Contact Us</title>
    <style>

.fcontainer {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: url('contact.jpg') no-repeat center center;
  background-size: cover;
}

.fcontainer::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3); 
  z-index: 1;
}

.box {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.9); 
  padding: 25px 25px;
  border-radius: 20px;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
}
.form-box{
  width: 450px;
  margin: 0px 10px;
}
.form-box header{
  font-size: 25px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid #e6e6e6;
  margin-bottom: 10px;
}
.form-box form .field{
  display: flex;
  margin-bottom: 10px;
  flex-direction: column;

}
.form-box form .input input{
  height: 40px;
  width: 95%;
  font-size: 16px;
  padding: 0 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  outline: none;
}
.field .btn{
  height: 35px;
  background-color: #771862;
  border: 0;
  border-radius: 5px;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
  transition: all .3s;
  margin-top: 10px;
  padding: 0px 10px;
}
.btn:hover{
  opacity: 0.82;
}
.submit{
  width: 100%;
}
.links{
  margin-bottom: 15px;
}

        .message {
            color: white;
            background-color: red; /* Ngjyra e kuqe për mesazhet */
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .success-message {
            background-color: green; /* Ngjyra jeshile për mesazhin e suksesit */
        }
    </style>
    
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
   
    <div class="fcontainer">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="signup.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>