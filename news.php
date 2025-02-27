<?php

include("connect_db.php");


    if (isset($_POST['submit'])) {
        try {
           
            $db = new Database();
            $connection = $db->connect();
    
           
            $name = $_POST['name'];
            $mbiemri = $_POST['mbiemri'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $question = $_POST['question'];
            if (strlen($question) <= 5) {
                echo "<p style='color: red;'>Pyetja duhet të ketë më shumë se 5 karaktere!</p>";
                return;
            }
        
            // Validimi i fushës 'email' (duhet të jetë një email i vlefshëm)
            $emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
            if (!preg_match($emailPattern, $email)) {
                echo "<p style='color: red;'>Email-i nuk është i vlefshëm!</p>";
                return;
            }
           
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
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
                image.style.display = 'block'; 
            } else {
             image.style.display = 'none'; 
        }
    }
    </script>






<h2>QUESTION FORM</h2>
<form method="POST" action="" onsubmit="return validateForm()">
    <label for="name">Emri:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="mbiemri">Mbiemri:</label>
    <input type="text" name="mbiemri" id="mbiemri" required><br><br>

    <label for="age">Mosha:</label>
    <input type="number" name="age" id="age" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="question">Question:</label>
    <input type="text" name="question" id="question" required><br><br>

    <button type="submit" name="submit">SUBMIT</button>
</form>

<script>
    function validateForm() {
        
        const name = document.getElementById("name").value;
        const mbiemri = document.getElementById("mbiemri").value;
        const age = document.getElementById("age").value;
        const email = document.getElementById("email").value;
        const question = document.getElementById("question").value;

      
        if (name === "" || mbiemri === "" || age === "" || email === "" || question === "") {
            alert("Të gjitha fushat janë të detyrueshme!");
            return false;
        }

      
        if (question.length <= 5) {
            alert("Pyetja duhet të ketë më shumë se 5 karaktere!");
            return false;
        }

        
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Email-i nuk është i vlefshëm!");
            return false;
        }

        
        if (age < 18) {
            alert("Duhet të jesh të paktën 18 vjeç për t'u regjistruar.");
            return false;
        }

       
        return true;
    }
</script>



<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    font-size: 1.5em; 
    color: #333;
    margin-top: 20px; 
}

form {
    width: 90%; 
    max-width: 500px; 
    margin: 20px auto;
    padding: 20px; 
    background-color: #ffffff;
    border-radius: 8px; 
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
}

form label {
    display: block;
    font-size: 0.95em; 
    color: #555;
    margin-bottom: 5px;
}

form input {
    width: 100%;
    padding: 8px; 
    font-size: 0.95em; 
    margin-bottom: 12px; 
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
    padding: 10px 18px; 
    background-color:rgb(201, 70, 183);
    color: white;
    font-size: 1em;
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
    margin-top: 15px; 
}

form .error-message {
    color: red;
    font-weight: bold;
    text-align: center;
    margin-top: 15px; 
}

@media (max-width: 768px) {
    h2 {
        font-size: 1.2em; 
    }

    form {
        width: 90%; 
    }

    form input, form button {
        font-size: 0.9em; 
    }
}

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
</style>


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






















