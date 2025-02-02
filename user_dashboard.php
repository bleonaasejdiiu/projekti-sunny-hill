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

    <link rel="stylesheet" href="tickets-style.css">

    <title>User Dashboard</title>
    <style>
       body {
        background: linear-gradient(to right,  rgb(113, 79, 117), rgb(138, 109, 134), rgb(189, 137, 183), rgb(189, 137, 183), rgb(138, 109, 134), rgb(113, 79, 117)); 
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
  justify-content: center;
  align-items: center;      
  width: 40%;
  max-width: 900px; 
  margin: 0 auto; 
  background-color:rgb(249, 245, 245);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px hsla(0, 26.50%, 90.40%, 0.10);
  text-align: center;
  transition: box-shadow 0.3s ease, transform 0.2s ease; 
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
  height: 300px;
  margin-bottom: 70px;
  

}
.main-box p{
    font-size:25px;
    color:black;
}

/* Media Queries */
@media only screen and (max-width: 840px) {
  .main-box .top {
    flex-direction: column;
    gap: 15px;
  }
}

.ticket-icon {     
    color:rgb(250, 229, 247);

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
    </nav>
    
 
    <main>
        <div class="main-box">
                    <p>Hello <b><?php echo $userData['Username']; ?></b>, Welcome</p>
                    
                    <p><b>Enjoy </b>Sunny Hill Festival!</p>
              
            
        </div>
    </main>

   
      <div class="tickets-logos">
        <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
        
      </div>
 
</body>
</html>