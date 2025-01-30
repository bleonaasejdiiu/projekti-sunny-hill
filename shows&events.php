<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// lidhja me databaze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "searchdb";
$connection="";

// Krijo lidhjen me databazen
$connection = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($connection->connect_error) {
    die("Lidhja me bazën e të dhënave dështoi: " . $connection->connect_error);
}
echo "Lidhja me databaz u realizua me sukses.<br>";

// Kontrollojm nese esht post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Merrni emrin e artistit
    $artist_name = trim($_POST['artist_name']); 
 
    // nese vlera e artistit esht that
    if (empty($artist_name)) {
        echo "Ju lutem shkruani emrin e artistit!";
    } else {
       
        $artist_name = htmlspecialchars($artist_name); 
        $artist_name = stripslashes($artist_name); 
        $artist_name = mysqli_real_escape_string($connection, $artist_name); 
        
        // SQL Query nese artisti eksziston
        $sql = "SELECT * FROM artists WHERE artist_name LIKE '%$artist_name%'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            // me shfaq informacionin per artistin
            while ($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["artist_name"] . "</h2>";
                echo "<p>" . $row["details"] . "</p>";
            }
        } else {
            echo "Nuk u gjet artisti: " . $artist_name;
        }
    }
} 

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>shows&events</title>
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
        <h1 class="sh">SHOWS&EVENTS</h1>

    <div class="all">
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-dhurata"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGvPZDJoaUcqEl5oj_fsCWhQ0rImykxPbUr38lSAJaxmerglJnNUeHn5oGBolIw3q1fgs&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Kengetare dhe artiste shqipetare</p>
                    <p>U lind ne 24 dhjetor 1992</p>
                    <p>Nje nder kenget e saj me te njohura eshte "Akuario"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-kresha"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5Tf1mhqfj9GolGBFbcQ7fMvfne8FZtsT7lw&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Repera dhe tekstshkrues shqiptar</p>
                    <p>Themeluesit e grupit pint</p>
                    <p>Nje nder bashkpunimet e tyre me te njohur eshte "Rrezek"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-lluni"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWw5ovgBkZujoUSWmd9O4Ljq0E4opVsG4LeA&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne 24 shkurt 1998</p>
                    <p>Nje nder kenget e tij me te njohura eshte "Nese Po Don"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-dafina"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRho3tG8nUHnW_VRiZ7Y1hmtu3xtztPZB7Tg&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Kengetare dhe artiste shqipare</p>
                    <p>U lind ne 14 prill 1989</p>
                    <p>Nje nder kenget e saj me te njohura eshte "E Dehur"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-buta"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuYVf7kmSRMGAOoj0y2PI2YcHdgdh63h4p6w&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne  23 tetor 1996</p>
                    <p>Nje nder kenget e ti me te njohura eshte"Shume Vone"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
         <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-yll"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkYEC24EKJUPjdchbcPf8dc5msuR5MIufe5Uwfegb-euGpw5PDia5wfaMAbkkkbp54Pgs&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Kengetar dhe tekstshkrues shqiptar!</p>
                    <p>U lind ne 4 prill 1992</p>
                    <p>Nje nder kenget e tij me te njohur eshte "Buzet e kuqe"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div> 
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-ledri"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWaJy50QttJAU-oE_zqK5obl8IRs6ZbO7RLQ&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne  27 korrik 1986</p>
                    <p>Nje nder kenget e tij me te njohura eshte "Bojna Sene"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-brothers"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcTcVzekQME_h6qvvayxW0RHxPEo8KYX6D-oZfTABhNrYSgjX4YVG3n1Bkmzy7sxr0jhw&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Grup muzikor i formuar nga dy verllezer amerikano-latin</p>
                    <p>Steven Martinez është lindur më 24 janar 1991 ndersa Chris Martinez është lindur më 7 maj 1989.</p>
                    <p>Nje nder bashkpunimet e tyre me te njohur eshte "H 2 Da Izzo"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-geasy"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqAWP8qNEh9N9M7Xl0j6oj8x8zQK1ptjMBHEIBOG5QaQKvHMBMDbeOr1mMPhZpoeOkrf0&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne 26 nëntor 1992</p>
                    <p>Nje nder kenget e tij me te njohura eshte "S'jam Kurgjo"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-bebe"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQmm5DHGZMsyuO_BJD1XaED82EFv8X3uguNFuMMb_pStzLBwRwKXSVr8TxNaag7WRKq_4&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Kengetare dhe artiste shqiptare me fame internacionale!</p>
                    <p>U lind ne 30 gusht 1989!</p>
                    <p>Nje nder kenget e saj me te njohura eshte "Meant to Be"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                <i class="fab fa-dj"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdWWEIR-JIQNe08OttPQ99SIhrUoj4J7cZdLiWTELR9yfB-eQ4GFrq3QDgslT_kB_GSmc&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Dj te njohur shqiptar</p>
                    <p>DJ PM ka lindur më 12 shkurt 1990 DJ Dagz ka lindur më 19 maj 1990</p>
                    <p>Nje nder remix-et e tyre me te njohur eshte "Coca-Cola"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-yanina"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXK3hTr4oTf2mgharwHJ_XSq4V4KCCQ5veFAB8R7oHAmPNVmyKgFAyDJE3YTNi5ve9Y6c&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Repere dhe kengetare shqiptare</p>
                    <p>U lind me 21 shtator 1994</p>
                    <p>Nje nder kenget e saj me te njohura eshte "Rruga e Re"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-mozzik"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHXOrFcrs3gZGzUZpRr3Xpx3oFSDYqElK6A7-D6Ka6e7gBVGETnFmP0d85EoLG3uRA3zc&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne 29 tetor 1996</p>
                    <p>Nje nder kenget e tij me te njohura eshte "Lejla"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-griff"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFutALdmUFvyWVslT1mt6_VXF2zKAoWMpGSz2CDvGHwUAA_fl9Y__p9CLyRWZ1cTyCM10&usqp=CAU">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Kengetare dhe artiste britaneze</p>
                    <p>U lind ne 29 maj 2001</p>
                    <p>Nje nder kenget e saj me te njohura eshte "Black Hole"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content1">
                    <i class="fab fa-capitalT"></i>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3GSSVIpzFOnwxDASEjw5z7x7HPOYxqYu64Q&s">
                </div>
            </div>
             <div class="face face2">
                <div class="content1">
                    <p>Reper dhe tekstshkrues shqiptar</p>
                    <p>U lind ne  24 mars 1992</p>
                    <p>Nje nder kenget e ti me te njohura eshte "Hatixhe"</p>
                    <a herf="#" type="button">Read More</a>
                </div>
             </div>
         </div>
    </div>

    <form action="search.php" method="POST" id="search-form">
    <div class="search-container">
        <label for="search-box">Kerkoni artistin tuaj te preferuar</label>
        <input type="text" id="search-box" name="search" placeholder="Shkruani emrin e artistit...">
        <button type="submit" id="search-button">Kerko</button>
    </div>
</form>
<script>
    // Perdorimi i 'submit' event per formularin
    document.getElementById('search-form').addEventListener('submit', function(event) {
        var searchQuery = document.getElementById('search-box').value.trim(); // mi heq hapsirat edhe mi marr vlerat ne kuti  
        
        if (searchQuery === "") {
            // Shfaq mesazh gabimi
            alert("Ju lutem shkruani emrin e artistit që kërkoni!");
            event.preventDefault(); // Ndalo dërgimin e formularit 
        } else {
            // dergimi i kerkeses
            alert("Kërkimi për: " + searchQuery);
        }
    });
</script>

        <div class="footer">
            <div class="footer-item1"> 
                <p>Volunteer</p>
              <p>Privacy Policy</p>
               <p>Terms Of Use</p>
       
           </div>
           
       
          <div class="footer-item2">
          <p>Email: info@sunnyhillfestival.com</p>
          <p>Sunny Hill Festival</p>
          <p>Enver Maloku, Nr.82</p>
          <p>Pristina 10000 Kosove</p>
          
           </div>
       
           <div class="footer-item">
               <h3>Sponsors</h3>
             <img src="klankosova.png">
             <img src="cocacola.jpg">
            
             <img  src="emerald.png"> 
             <img src="prince.jpg">
       
             <img src="vodafone.jpg">
          </div> 
        </div> 
        
</body>
 </html>
        