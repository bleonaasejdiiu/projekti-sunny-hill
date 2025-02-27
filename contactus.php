<?php
session_start();

include("connect_db.php");
include("Login.php"); 

$database = new Database();
$conn = $database->connect();

$login = new Login($conn);

$error_message = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($login->authenticate($email, $password)) {
        if ($_SESSION['role'] === 'admin') {
            echo "<div id='successPopup' class='popup success'>
                    <div class='popup-content'>
                        <p>Login successful as Admin!</p>
                    </div>
                  </div>";
            echo "<script>
                    document.getElementById('successPopup').style.display = 'block';
                    setTimeout(function() {
                        window.location.href = 'admin_dashboard.php';
                    }, 1000);
                  </script>";
        } else {
            echo "<div id='successPopup' class='popup success'>
                    <div class='popup-content'>
                        <p>Login successful!</p>
                    </div>
                  </div>";
            echo "<script>
                    document.getElementById('successPopup').style.display = 'block';
                    setTimeout(function() {
                        window.location.href = 'user_dashboard.php';
                    }, 1000);
                  </script>";
        }
    } else {
        $error_message = "Wrong Email or Password!";
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
    
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    <style>
     .message {
            color: white;
            background-color: red;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

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
            width: 390px;
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
            width: 95%;
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
                    Don't have an account? <a href="signup.php">Sign Up </a>
                </div>
            </form>
        </div>
    </div>

    <?php if (!empty($error_message)): ?>
        <div class="popup error" id="errorPopup">
            <div class="popup-content">
                <p><?php echo $error_message; ?></p>
            </div>
        </div>
        <script>
            document.getElementById('errorPopup').style.display = 'block';
            setTimeout(function() {
                document.getElementById('errorPopup').style.display = 'none';
            }, 2000); 
        </script>
    <?php endif; ?>

</body>
</html>
</body>
</html>