<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: contactus.php");
    exit;
}

echo "<h1>Welcome to the Admin Dashboard!</h1>";
echo "<p>Hello,  " . $_SESSION['username'] . "!</p>";
echo "  <a href='logout.php'><button class='btn'>Log Out</button></a>";
?>