<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location:../ contactus.php");
    exit;
}

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

<form method="POST" action="add_user.php">
    <label for="username">Username</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="age">Age</label><br>
    <input type="number" id="age" name="age" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Add User">
</form>