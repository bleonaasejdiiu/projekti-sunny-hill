
<?php
// Përshtatimi i kodit me OOP
include("connect_db.php"); // Ky fajll përmban klasën Database dhe metodën connect()

// Krijo objektin e klasës Database dhe lidhjen me bazën
$database = new Database();
$db = $database->connect();

// Krijo një klasë për menaxhimin e përmbajtjes
class Content {
    private $conn;
    private $table_name = "content1"; // Emri i tabelës

    // Ndërtuesi i klasës Content
    public function __construct($db) {
        $this->conn = $db;
    }

    // Metoda për të marrë përmbajtjen nga baza e të dhënave
    public function getContentByPageName($page_name) {
        // Përgatitja e pyetjes SQL
        $query = "SELECT titulli, teksti, emri_faqes FROM " . $this->table_name . " WHERE emri_faqes = :page_name LIMIT 1";
        
        // Përgatitja e pyetjes
        $stmt = $this->conn->prepare($query);

        // Lidhja e parametrave
        $stmt->bindParam(':page_name', $page_name);

        // Ekzekutimi i pyetjes
        $stmt->execute();

        // Kontrollojmë nëse ka të dhëna dhe i marrim
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC); // Kthejmë të dhënat e gjetura
        } else {
            return null; // Nuk ka të dhëna për faqen
        }
    }
}

// Krijo një objekt të klasës Content dhe merr përmbajtjen për faqen "about us"
$content = new Content($db);
$page_data = $content->getContentByPageName('about us');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>about us</title>
    
</head>
<body>
    <nav class="navbar">
        <a href="home.html">Home</a>
        <a href="shows&events.html">Shows&Events</a>
        <a href="news.html">News</a>
        <a href="Tickets.html">Tickets</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.html">Log In</a>
    </nav>
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
    


<!--<style>
    .footer {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 20px;
 
  background-color:rgb(240, 233, 237); /* Ngjyra e qumështit */
  color: #333; /* Ngjyrë e errët për tekstin për kontrast */
  text-align: center;
}

.footer-item {
  padding: 10px;
}

/* ✅ Mobile & Tableta */

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

</style>
-->
<style>
    
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
