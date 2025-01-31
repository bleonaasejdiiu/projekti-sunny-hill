<?php
session_start();
include("connect_db.php"); // Përfshijmë konfigurimin e bazës së të dhënave
include("Register.php");

// Inicimi i klasës Register
$database = new Database();
$conn = $database->connect();

// Krijimi i një objekti të klasës Register
$register = new Register($conn);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // Verifikimi i email-it nëse është unik
    if ($register->verifyEmail($email)) {
        echo "<div class='message'>
                <p>This email is already used. Please try another one.</p>
              </div>";
    } else {
        // Regjistrimi i përdoruesit të ri
        if ($register->registerUser($username, $email, $age, $password)) {
            echo "<div class='message success-message'>
                    <p>Registration successful! You can now log in.</p>
                  </div>";
            echo "<script>setTimeout(function() { window.location.href = 'contactus.php'; }, 3000);</script>";
        } else {
            echo "<div class='message'>
                    <p>Something went wrong. Please try again.</p>
                  </div>";
        }
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
    <title>Register</title>
    <script>
        function validateRegisterForm() {
            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const age = document.getElementById("age").value;
            const password = document.getElementById("password").value;

            if (username === "" || email === "" || age === "" || password === "") {
                alert("Please fill in all fields.");
                return false;
            }

            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email.");
                return false;
            }

            if (age < 18) {
                alert("You must be at least 18 years old to register.");
                return false;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            return true;
        }
    </script>
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
  background-color: rgba(0, 0, 0, 0.3); /* Ngjyrë e zezë e zbehtë për background */
  z-index: 1;
}

.box {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.9); /* Zbehje vetëm për kutinë */
  padding: 25px 25px;
  border-radius: 20px;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
}
.form-box{
  width: 400px;
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
  width: 380px;
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
            <header>Sign Up</header>
            <form action="" method="post" onsubmit="return validateRegisterForm()">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already a member? <a href="contactus.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
  
</body>
</html>