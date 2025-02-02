<?php

include("connect_db.php"); 
include('comment.php');

session_start();

// krijimi i lidhjes te databaze me oop
$database = new Database();
$db = $database->connect();

$comment = new Comment($db);

// nese eshte post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'])) {
    $commentText = htmlspecialchars(trim($_POST['comment']));
    $page_name = 'about us'; 

     // Validimi i komenteve
     if (!empty($commentText)) {
        if ($comment->saveComment($commentText, $page_name)) {
            $_SESSION['message'] = "Komenti është postuar me sukses!"; 
        } else {
            $_SESSION['message'] = "Ka ndodhur një gabim gjatë postimit të komentit."; 
        }
    } else {
        $_SESSION['message'] = "Ju lutem, shkruani një koment para se ta postoni!"; 
    }
}

// marrim komentet per faqen
$comments = $comment->getComments('about us');

/////////////////////////////////////////////////////////////
class Content {
    private $conn;
    private $table_name = "content1"; 

    
    public function __construct($db) {
        $this->conn = $db;
    }

  
    public function getContentByPageName($page_name) {
        
        $query = "SELECT titulli, teksti, emri_faqes FROM " . $this->table_name . " WHERE emri_faqes = :page_name LIMIT 1";
        
       
        $stmt = $this->conn->prepare($query);

       
        $stmt->bindParam(':page_name', $page_name);

       
        $stmt->execute();

        
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null; 
        }
    }
}


$content = new Content($db);
$page_data = $content->getContentByPageName('about us');


$titulli = isset($page_data['titulli']) ? $page_data['titulli'] : 'Titulli nuk është gjetur';
$teksti = isset($page_data['teksti']) ? $page_data['teksti'] : 'Teksti nuk është gjetur';
$emri_faqes = isset($page_data['emri_faqes']) ? $page_data['emri_faqes'] : 'Emri i faqes nuk është gjetur';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>about us</title>
    
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

    <!-- Shfaqim mesazhin nga sesioni -->
    <?php
    if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $_SESSION['message'] . "');</script>";
        unset($_SESSION['message']);  
    }
    ?> 

                <h1 class="b"><?php echo isset($titulli) ? $titulli : 'ABOUT US'; ?></h1>
                <div class="a">
                    <ul>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                        <a herf="#"><li>LEARN MORE ABOUT US</li></a>
                     </ul>           
                     <div class="row">
                        <div class="left">
                            <img src="https://yourope.org/wp-content/uploads/2023/04/sunny-hill-festival-2.jpg" alt="Sunny Hill Festival">   
                        </div>
                        <div class="right">
                            <div class="content">
                            <?php  // explode per me nda tekstin ne paragrafe//
                         $paragrafet = explode("\n", $teksti); 

                    
                    foreach ($paragrafet as $paragraf) {
                        if (!empty($paragraf)) {
                            echo "<p>" . nl2br(trim($paragraf)) . "</p>";
                        }
                    }
                    ?>
                            </div>
                        </div>
                     </div>     
                 
         <h1 class="c"> GALLERY</h1>
        <div class="gallery1">
            <img src="https://hello.last2ticket.com/wp-content/uploads/2018/10/Screen-Shot-2016-10-31-at-2.10.07-PM.png">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJlGDbJBgMdoOSzPTh4hZrr9pn4sL6h0sa1A&s">
            <img src="https://republika.tv/wp-content/uploads/2023/08/SHF2-2-700x787.png">
            <img src="https://resources.koha.net/images/2018/August/17/merlin_142327122_3ce9bc27-141c-4e46-88a2-1fdcb8387674-superJumbo1534520623.jpg?q=90&w=860&h=550&r=fill">
        </div>
        <div class="gallery2">
            <img src="https://sunnyhillfestival.com/wp-content/uploads/2022/12/298154103_1878087875713369_1298231993370887705_n.jpeg">
            <img src="https://sunnyhillfoundation.org/wp-content/uploads/2023/03/297452549_1875723069283183_6306796931206293004_n.jpeg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZf1IxTuCYu6GoZNPr2J9rxhUe04CZ8Q4FKElvBmcL-uYYPV9ctC3CI96jNh1p6i-kzTg&usqp=CAU">
            <img src="https://sunnyhillfestival.com/wp-content/uploads/2024/04/ELLE-Dua-Lipa-Liberates-Europes-Youngest-Country.jpg">
        </div>
        <div class="gallery3">
            <img src="https://studioberar.com/wp-content/uploads/2022/09/302253331_1893847917470698_4310898303445283015_n-e1663674753991.jpg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzmn_53NMYeoXEA_8HU4E8GrBj9V2mS8PKNw&s">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqmZEkBN23h5kVKCn6G1Z4wNi06nWUL87GpQ-0xiqT8H7r1VsXp-0nAYus6Yn7wtjyr1U&usqp=CAU">
            <img src="https://sunnyhillfestival.com/wp-content/uploads/2024/04/Sunny-Hill-Festival-Grand-Return-in-Prishtina.jpg">
        </div>      
    
        <div class="container3">
        <h2>Trego eksperiencen tende</h2>
        
        <div class="comment-box3">
            <textarea id="commentInput" placeholder="Shkruaj nje koment..." rows="4" cols="50"></textarea>
            <button onclick="addComment()">Posto Komentin</button>
        </div>
        
        <div id="commentsSection">
            <!-- Komentet do te shfaqen ktu -->
        </div>
    </div>

    <script src="script2.js"></script>


<style>
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
.footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: rgb(240, 233, 237); 
        color: #333;
    }


    .footer-item {
        flex: 1;
        text-align: left;
    }

    .sponsors {
        display: flex; 
        gap: 0; 
    }

    .sponsors img {
        width: 80px; 
        height: auto;
        max-height: 50px;
        object-fit: contain;
        margin: 0 !important; 
        padding: 0 !important; 
        display: inline-block; 
    }


    @media (max-width: 768px) {
       .footer {
            flex-direction: column;
            text-align: center;
        }

       .sponsors img {
            width: 60px;
            max-height: 40px;
        }
    }
</style>


<footer class="footer">
    <div class="footer-item"> 
        <p>Volunteer</p>
        <p>Privacy Policy</p>
        <p>Terms Of Use</p>
    </div>
    
    <div class="footer-item">
        <p>Email: info@sunnyhillfestival.com</p>
        <p>Sunny Hill Festival</p>
        <p>Enver Maloku, Nr.82</p>
        <p>Pristina 10000 Kosove</p>
    </div>

    <div class="footer-item sponsors">
        <h3>Sponsors</h3>
        <img src="klankosova.png" alt="Klan Kosova">
        <img src="cocacola.jpg" alt="Coca Cola">
        <img src="emerald.png" alt="Emerald">
        <img src="prince.jpg" alt="Prince">
        <img src="vodafone.jpg" alt="Vodafone">
    </div>
</footer>
 
</body>
</html>
