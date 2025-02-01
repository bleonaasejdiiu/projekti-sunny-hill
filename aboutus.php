<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "aboutusdb";
$connection = "";

// Krijojme lidhjen me databazen
$connection = new mysqli($servername, $username, $password, $db_name);

// Kontrollo nese lidhja u realizu
if ($connection->connect_error) {
    die("Lidhja me databaze deshtoi: " . $connection->connect_error);
}

$titulli = "";
$teksti = "";
$emri_faqes = "";

$sql = "SELECT titulli, teksti, emri_faqes FROM content1 WHERE emri_faqes = 'about us' LIMIT 1";
$result = $connection->query($sql);



$connection->close();
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
                <h1 class="b">ABOUT US</h1>
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
                                <p>
                                    SUNNY HILL Festival is the biggest music festival in Kosovo and based on the headliners, probably the biggest in South East Europe. International music festival of the highest standards, one that puts Prishtina – Kosovo on the festival map as a not to be missed cultural place, in a country that loves music and knows how to have fun.</p>
                                   <p> In each edition, Sunny Hill Festival hosts more than 100,000 music lovers from around the world to come and experience the weekend of the festival with the best lineup – some of the best-known performers of our modern time and charts – including Dua Lipa, Miley Cyrus, J Balvin, Calvin Harris, Martin Garrix, Afrojack, Hardwell, Stormzy, Skepta, AJ Tracey, Action Bronson, Gashi and many more regional and international artists and performers.</p>
                                   <p> This year, Sunny Hill Festival reclaimed the spotlight of local and global attention this past summer, announcing two new editions, one in Pristina and another in Tirana. Being featured on global media outlets, such as The New York Times, BBC, The Guardian, Vogue, Rolling Stone, Elle, Billboard.com, NME, and many many more, the festival has managed to appear on more than five thousand media articles, all across the world, reaching almost 1 billion impressions, 4M interactions and 4M likes among other KPIs.
                                    Additionally, by bringing together a great crowd of diverse people from all ages, this year’s editions managed to create a powerful progressive motion in the both countries economic, touristic and cultural development.
                                    Sunny Hill Festival is at the service of Sunny Hill Foundation.</p> 
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
