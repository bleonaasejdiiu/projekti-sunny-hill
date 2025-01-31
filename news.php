<?php

include("connect_db.php");
/*if (isset($_POST['submit'])) {
    try {
        
        $name = $_POST['name'];
        $mbiemri = $_POST['mbiemri'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $question=$_POST['question'];

        $sql = "INSERT INTO user (emri, mbiemri, mosha, email,question) 
                VALUES (:emri, :mbiemri, :mosha, :email,:question)";
        
        
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':emri' => $name,
            ':mbiemri' => $mbiemri,
            ':mosha' => $age,
            ':email' => $email,
            ':question'=> $question
        ]);

    
        echo "<p style='color: green;'>useri u shtua me sukses!</p>";

    } catch (PDOException $e) {
       
        echo "<p style='color: red;'>Gabim: " . $e->getMessage() . "</p>";
    }
}
    */
    if (isset($_POST['submit'])) {
        try {
            // Krijo objektin e databazës dhe lidhu me bazën e të dhënave
            $db = new Database();
            $connection = $db->connect();
    
            // Merr të dhënat nga formulari
            $name = $_POST['name'];
            $mbiemri = $_POST['mbiemri'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $question = $_POST['question'];
    
            // Përgatit query-in për futjen e të dhënave
            $sql = "INSERT INTO user (emri, mbiemri, mosha, email, question) 
                    VALUES (:emri, :mbiemri, :mosha, :email, :question)";
    
            $stmt = $connection->prepare($sql);
            $stmt->execute([
                ':emri' => $name,
                ':mbiemri' => $mbiemri,
                ':mosha' => $age,
                ':email' => $email,
                ':question' => $question,
            ]);
    
            echo "<p style='color: green;'>Useri u shtua me sukses!</p>";
    
        } catch (PDOException $e) {
            echo "<p style='color: red;'>Gabim: " . $e->getMessage() . "</p>";
        }
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
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
        <div id="header">
            
            <h1>NEWS</h1>
             </div>
            <marquee id="container">STAY TUNED  FOR 2025 &nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025 &nbsp;&nbsp; STAY TUNED FOR 2025  &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025 </marquee>
      




        
        
        <div class="news">
                <p onclick="showImage('image1')">WE HAVE BEEN NOMINATED FOR THE BEST EUROPIAN FESTIVAL AWARD!!</p>
                <div id="image1" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2022/11/SHFxEFA_NewsArticle.png" alt="Image 0">
                </div>
        </div>
        <div class="news"> 
            <p onclick="showImage('image3')">ABC  News: Dua  Lipa  has  taken  the  world  of  pop  by  storm.</p>
            <div id="image3" class="news-image" style="display: none;">
              <img src="https://tse4.mm.bing.net/th?id=OIP.4A0FgugLhKf85jr4ZByLpQHaEK&pid=Api" alt="Dua Lipa Performing Live at the Royal Albert Hall">>
            </div>
        </div>
        <div class="news"> 
            <p onclick="showImage('image4')">NME: Dua Lipa's dad is putting on a Musical Festival.</p>
            <div id="image4" class="news-image" style="display: none;">
                <img src="https://sunnyhillfestival.com/wp-content/uploads/2023/02/Vito-Valentinetti-Concert-For-Earth-2022-765.jpg" alt="Dua Lipa Performance">
            </div>
            </div>
       
        
            <div class="news">
                <p onclick="showImage('image5')">Dua Lipa named the Honorary Ambassador of her home Country, Kosovo</p>
                <div id="image5" class="news-image" style="display: none;">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.yMQO4_dOhBT0xjCIkFbXmAHaEK&pid=Api" alt="Dua Lipa Honorary Ambassador of Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image6')">MTV UK: Dua Lipa was given the first ever key to hometown in Kosovo</p>
                <div id="image6" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/gettyimages-949263270.jpg" alt="Dua Lipa in Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image8')">The New York Times: Can a Music Festival Make Kosovo Cool?</p>
                <div id="image8" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/NYTIMES.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image7')">SpinSouthWest: Dua Lipa & Her Dad Created Their Own Festival In Kosovo.</p>
                <div id="image7" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/abc1.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image9')">MTV Italy: DUA LIPA SARÀ HEADLINER DEL FESTIVAL MUSICALE REALIZZATO DA SUO PAPÀ IN KOSOVO.</p>
                <div id="image9" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/mtvitaly.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image10')">Giving Balkans: Dua Lipa Donates EUR 100,000 to Sunny Hill Foundation..</p>
                <div id="image10" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/giving-balkans.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image11')">Festival Squad: Sunny Hill Festival Is Putting Kosovo on the Map.</p>
                <div id="image11" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/festival-squad.jpg" alt=" Kosovo">
                </div>
            </div>
           
            <div class="news">
                <p onclick="showImage('image13')">Metro UK: Dua Lipa’s dad is putting on a music festival and of course the singer will be performing.</p>
                <div id="image13" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/metrouk.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image14')">LooMee TV: Dua Lipa: Ihr Vater ruft Festival ins Leben..</p>
                <div id="image14" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/pedestriantv.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image15')">BalcanCaucaso: Festivals bring the world to Kosovo.</p>
                <div id="image15" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/balcancausaco.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image16')">BIG FM: Dua Lipa organisiert eigenes Sunny Hill Festival im Kosovo.</p>
                <div id="image16" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2021/05/musicbox.jpg" alt=" Kosovo">
                </div>
            </div>
            <div class="news">
                <p onclick="showImage('image17')">SUNNY HILL FESTIVAL: WE REMAIN HOPEFUL THAT THIS…</p>
                <div id="image17" class="news-image" style="display: none;">
                    <img src="https://sunnyhillfestival.com/wp-content/uploads/2024/04/Sunny-Hill-Festival-Grand-Return-in-Prishtina.jpg" alt=" Kosovo">
                </div>
            </div>
        
        

    <script>
        function showImage(imageId) {
            const image = document.getElementById(imageId);
            if (image.style.display === 'none') {
                image.style.display = 'block'; // Shfaq imazhin
            } else {
             image.style.display = 'none'; // Fshi imazhin
        }
    }
    </script>
<!---->


<!--<form id="questionForm" action="question.php" method="POST">
        <div class="question-section">
            <h3>HAVE A QUESTION OR NEED CLARIFICATION?</h3>
            
            <input id="username" type="text" name="username" placeholder="Enter your username" required>
            
            <input id="password" type="password" name="password" placeholder="Enter your password" required>
            
            <textarea id="question" name="question" placeholder="Write your question here..." required></textarea>
            
            <button type="submit">Submit</button>
        </div>
      </form>
      
      <script>
        document.getElementById('questionForm').addEventListener('submit', function(event) {
            var question = document.getElementById('question').value;
            if (question.trim() === "") {
                alert("Please enter a question before submitting.");
                event.preventDefault(); 
            }
        });
      </script>



-->
<h2>QUESTION FORM</h2>
    <form method="POST" action="">
        <label for="name">Emri:</label>
        <input type="text" name="name" required><br><br>

        <label for="mbiemri">Mbiemri:</label>
        <input type="text" name="mbiemri" required><br><br>

        <label for="age">Mosha:</label>
        <input type="number" name="age" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="text">Question:</label>
        <input type="text" name="question" required><br><br>


        <button type="submit" name="submit">SUBMIT</button>
    </form>      

      
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    font-size: 1.5em; /* Zvogëluar madhësinë e titullit */
    color: #333;
    margin-top: 20px; /* Zvogëluar margjinën e sipërme */
}

form {
    width: 90%; /* Zvogëluar gjerësinë e formës */
    max-width: 500px; /* Ulur gjerësinë maksimale */
    margin: 20px auto;
    padding: 20px; /* Zvogëluar padding-un */
    background-color: #ffffff;
    border-radius: 8px; /* Rrethimi i formës më i vogël */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Hije më e lehtë */
}

form label {
    display: block;
    font-size: 0.95em; /* Zvogëluar madhësinë e etiketës */
    color: #555;
    margin-bottom: 5px;
}

form input {
    width: 100%;
    padding: 8px; /* Zvogëluar padding-un */
    font-size: 0.95em; /* Zvogëluar madhësinë e tekstit në input */
    margin-bottom: 12px; /* Zvogëluar margjinën ndërmjet inputeve */
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

form input:focus {
    outline: none;
    border-color:rgb(219, 101, 208);
    box-shadow: 0 0 5px rgb(237, 104, 199);
}

form button {
    padding: 10px 18px; /* Zvogëluar padding-un e butonit */
    background-color:rgb(201, 70, 183);
    color: white;
    font-size: 1em; /* Zvogëluar madhësinë e tekstit të butonit */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
}

form button:hover {
    background-color:rgb(234, 154, 242);
}

form button:active {
    background-color:rgb(233, 155, 243);
}

form .success-message {
    color: green;
    font-weight: bold;
    text-align: center;
    margin-top: 15px; /* Zvogëluar margjinën */
}

form .error-message {
    color: red;
    font-weight: bold;
    text-align: center;
    margin-top: 15px; /* Zvogëluar margjinën */
}

@media (max-width: 768px) {
    h2 {
        font-size: 1.2em; /* Zvogëluar madhësinë e titullit në ekranet e vogla */
    }

    form {
        width: 90%; /* Zvogëluar gjerësinë në ekranet e vogla */
    }

    form input, form button {
        font-size: 0.9em; /* Zvogëluar fontin në inpute dhe butona */
    }
}
</style>


<!--<div class="footer">


        
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

-->
<style>
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
    grid-template-columns: 1fr;
    text-align: center;
  }

  .sponsors {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
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






















