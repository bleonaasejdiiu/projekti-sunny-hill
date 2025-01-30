<?php
include 'connect_db.php';

if (isset($_POST['signup-btn'])) {
    $username = $_POST['signup-username'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: contactus.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['login-btn'])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['login-email'] = $row['email'];
        header("Location: home.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>