<?php
session_start();
include("connect_db.php"); 
include("Register.php");


$database = new Database();
$conn = $database->connect();


$register = new Register($conn);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

   
    if ($register->verifyEmail($email)) {
        echo "<div id='errorPopup' class='popup error'>
                <div class='popup-content'>
                    <p>This email is already used. Please try another one.</p>
                </div>
              </div>";
        echo "<script>
                document.getElementById('errorPopup').style.display = 'block'; // Show error popup
                setTimeout(function() {
                    document.getElementById('errorPopup').style.display = 'none'; // Hide error popup after 3 seconds
                }, 3000);
              </script>";
    } else {
        
        if ($register->registerUser($username, $email, $age, $password)) {
            echo "<div id='successPopup' class='popup success'>
                    <div class='popup-content'>
                        <p>Registration successful! You can now log in.</p>
                    </div>
                  </div>";
            echo "<script>
                    document.getElementById('successPopup').style.display = 'block'; // Show success popup
                    setTimeout(function() {
                        window.location.href = 'contactus.php';
                    }, 3000);
                  </script>";
        } else {
            echo "<div id='errorPopup' class='popup error'>
                    <div class='popup-content'>
                        <p>Something went wrong. Please try again.</p>
                    </div>
                  </div>";
            echo "<script>
                    document.getElementById('errorPopup').style.display = 'block'; // Show error popup
                    setTimeout(function() {
                        document.getElementById('errorPopup').style.display = 'none'; // Hide error popup after 3 seconds
                    }, 3000);
                  </script>";
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="tickets-style.css">
    <title>Register</title>
  
    <style>
       
        .popup {
            display: none; 
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            animation: popupAnimation 0.5s ease-in-out; 
        }

        .popup-content {
            text-align: center;
        }

        .success {
            background-color: #4caf50;
            color: white;
        }

        .error {
            background-color: #f44336; 
            color: white;
        }

        @keyframes popupAnimation {
            0% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
            100% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
        }

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

        .form-box {
            width: 350px;
            margin: 0px 10px;
        }

        .form-box header {
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
            margin-bottom: 10px;
        }

        .form-box form .field {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;
        }

        .form-box form .input input {
            height: 40px;
            width: 330px;
            font-size: 16px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .field .btn {
            height: 35px;
            background-color: #771862;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0 10px;
            height:40px;
        }

        .btn:hover {
            opacity: 0.82;
        }

        .submit {
            width: 100%;
        }

        .links {
            margin-bottom: 15px;
        } 
        .navbar .profile-icon {
    position: absolute;
    right: 10px;
 
}

.navbar .profile-icon i {
    font-size: 24px;
    color: white;
    cursor: pointer;
}
.navbar .profile-icon:hover {
  background-color: transparent; 
  color: white; 
}
    </style>
</head>
<body>
<nav class="navbar">
        <a href="home.php">Home</a>
        <a href="shows&events.php">Shows&Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Log In</a>

        <a href="user_dashboard.php" class="profile-icon">
        <i class="fa-solid fa-user-large"></i>
    </a>
    </nav>
    <div class="fcontainer">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post" onsubmit="return validateRegisterForm()">
                <div class="field input">
                    <label for="username">Full Name</label>
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
                    Already a member? <a href="contactus.php">Log In</a>
                </div>
            </form>
        </div>
    </div>
  
    <script src="script.js"></script>
</body>
</html>