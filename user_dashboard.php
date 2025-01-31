<?php
session_start();

include("connect_db.php");
include("User.php");

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
    <style>
       body{
        background: rgb(247, 243, 247);
       }
.nav {
    background: linear-gradient(to right,  rgb(113, 79, 117), rgb(138, 109, 134), rgb(189, 137, 183), rgb(189, 137, 183), rgb(138, 109, 134), rgb(113, 79, 117)); 
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 30px;
  color: white;
  font-family: Arial, sans-serif;
}

.nav .logo {
  font-size: 24px;
  font-weight: bold;
}

.nav .logo a {
  text-decoration: none;
  color: #fff;
}

.right-links a {
  color: #fff;
  padding: 8px 20px;
  text-decoration: none;
  margin-left: 20px;
 font-size: 20px;
}

.right-links .btn {
  background-color: #daa2ce;
  color: white;
  border: none;
  padding: 8px 15px;
  border-radius: 5px;
  cursor: pointer;
  color: black;
  font-size:15px;
}

.right-links .btn:hover { 
   background-color:rgb(186, 115, 170);
}

main {
  display: flex;
  justify-content: center;
  margin-top: 80px;
  padding: 0 20px;
}

.main-box {
  display: flex;
  flex-direction: column;
  width: 80%;
  max-width: 900px;
}

.main-box .top {
  display: flex;
  flex-direction: column; /* Change from row to column */
  justify-content: space-between;
  margin-bottom: 170px;
}

.top .box {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 8px;
  flex: 1;
  min-width: 280px;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 15px; /* Added spacing between the boxes */
  text-align: center;
 
}
.top .box p {
  font-size: 16px;
  color: #333;
}


/* Media Queries */
@media only screen and (max-width: 840px) {
  .main-box .top {
    flex-direction: column;
    gap: 15px;
  }
}
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">HOME</a></p>
        </div>
        <div class="right-links">
            <a href="Tickets.php"><b>Buy Tickets</b></a>
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
 
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $userData['Username']; ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p><b>Enjoy SuNnY HiLl Festival</b>.</p>
                </div>
                
            </div>
           
        </div>
    </main>

   <div class="tickets-logo-section">
   
      <div class="tickets-logos">
        <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
        
      </div>
  </div>
</body>
</html>