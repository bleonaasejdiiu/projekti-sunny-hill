<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../contactus.php");
    exit;
}

include_once '../connect_db.php';
include_once '../Admin.php';

$database = new Database();
$conn = $database->connect();

$admin = new Admin($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'connect_db.php';
    $admin = new Admin($conn);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $admin->addUser($username, $email, $age, $password);

    header("Location: ../admin_dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

    

        .form-container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="number"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #820a6b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #620746;
        }

        .form-container .cancel-btn {
            text-align: center;
            margin-top: 20px;
        }

        .form-container .cancel-btn a {
            color: #820a6b;
            text-decoration: none;
            font-size: 16px;
        }

        .form-container .cancel-btn a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>


    <div class="form-container">
        <h2>Add New User</h2>

        <form method="POST" action="add_user.php" onsubmit="return validateRegisterForm()">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="age">Age</label>
    <input type="number" id="age" name="age" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Add User">
</form>
        <div class="cancel-btn">
            <a href="../admin_dashboard.php">Cancel</a>
        </div>
    </div>
    <script >
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
</body>
</html>