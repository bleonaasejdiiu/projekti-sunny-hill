<?php
session_start();

include("connect_db.php");
include("user.php");

if(!isset($_SESSION['valid'])){
    header("Location: contactus.php");
    exit;
}

$db = new Database();
$conn = $db->connect();
$home = new User($conn);

$userData = $home->getUserData($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>
        <div class="right-links">
            <a href="edit.php?Id=<?php echo $userData['Id']; ?>">Change Profile</a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $userData['Username']; ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $userData['Email']; ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>And you are <b><?php echo $userData['Age']; ?> years old</b>.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>