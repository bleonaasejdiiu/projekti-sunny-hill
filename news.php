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
        <a href="shows&events.html">Shows&Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.php">Log In</a>
    </nav>
        <div id="header">
            
            <h1>NEWS</h1>
             </div>
            <marquee id="container">STAY TUNED  FOR 2025 &nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp; STAY TUNED FOR 2025 &nbsp;&nbsp; STAY TUNED FOR 2025  &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025 &nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025&nbsp;&nbsp;STAY TUNED FOR 2025 </marquee>
      




        
        
        <div class="news">
        	<p>WE HAVE BEEN NOMINATED FOR THE BEST EUROPIAN FESTIVAL AWARD!</p>
        </div>
        <div class="news"> 
        	<p>ABC  News: Dua  Lipa  has  taken  the  world  of  pop  by  storm.</p>
        </div>
        <div class="news">
        	<p>NME: Dua Lipa's dad is  putting on a Musical Festival.</p>
        </div>
        <div class="news">
        	<p>Dua Lipa named the Honorary Ambassador of her home Country, Kosovo</p>
        </div>
        <div class="news">
        	<p>MTV UK: Dua Lipa was given the first ever key to hometown in Kosovo.</p>
        </div>
        <div class="news">
        	<p>The New York Times: Can a Music Festival Make Kosovo Cool?</p>
        </div>
        <div class="news">
        	<p>SpinSouthWest: Dua Lipa & Her Dad Created Their Own Festival In Kosovo.</p>
        </div>
        <div class="news">
        	<p>MTV Italy: DUA LIPA SARÀ HEADLINER DEL FESTIVAL MUSICALE REALIZZATO DA SUO PAPÀ IN KOSOVO.</p>
        </div>
        <div class="news">
        	<p>Giving Balkans: Dua Lipa Donates EUR 100,000 to Sunny Hill Foundation.</p>
        </div>
        <div  class="news">
        	<p>Festival Squad: Sunny Hill Festival Is Putting Kosovo on the Map.</p>
        </div>
        <div class="news">
        	<p>Emerging Europe: Dua Lipa comes home.</p>
        </div>
        <div class="news">
        <p>Metro UK: Dua Lipa’s dad is putting on a music festival and of course the singer will be performing.</p>
    </div>
    <div class="news">
    	<p>LooMee TV: Dua Lipa: Ihr Vater ruft Festival ins Leben.</p>
    </div>
    <div class="news">
    	<p>BalcanCaucaso: Festivals bring the world to Kosovo.</p>
    </div>
    <div class="news">
    	<p>BIG FM: Dua Lipa organisiert eigenes Sunny Hill Festival im Kosovo.</p>
    </div>
    <div class="news">
    	<p>SUNNY HILL FESTIVAL: WE REMAIN HOPEFUL THAT THIS…</p>
    </div>

<!---->


<form id="questionForm" action="submit_question.php" method="POST">
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
    
    <!--
    <<<<<<< HEAD


#container {

  background-color: rgb(101, 77, 100); 
  color: white; 
  height: 50px; 
  width: 100%; 
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem; 
  letter-spacing: 0px;
  word-spacing: 10px;
  
}


.news{
	font-size: 25px;
	font-family: sans-serif;
	border-bottom: 2px solid black;
	/*padding-left: 30px; */ 
	text-align: center;
}
.news:hover{
	background-color: #dcd9e0;
	padding-top: 3px;
    
-->

   

              
</body>
</html>
<!--
#header {
  margin-top: 20px;
  background-color: rgb(195, 59, 39);
  height: 350px; 
  width: 100%; 
  display: flex; 
  align-items: center; 
  justify-content: center; 

}
#header h1 {
  color: white; 
  font-size: 3rem; 
}
#container {

  background-color:#e13f1b; 
  color: white; 
  height: 50px; 
  width: 100%; 
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem; 
  letter-spacing: 0px;
  word-spacing: 10px;
  
}


.news{
	font-size: 25px;
	font-family: sans-serif;
	border-bottom: 2px solid black;
	/*padding-left: 30px; */ 
	text-align: center;
}
.news:hover{
	background-color: #dcd9e0;
	padding-top: 3px;
}
#container {

  background-color: rgb(241, 82, 14); 
  color: white; 
  height: 50px; 
  width: 100%; 
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem; 
  letter-spacing: 0px;
  word-spacing: 10px;
  
}
.news{
	font-size: 25px;
	font-family: sans-serif;
	border-bottom: 2px solid black;
	/*padding-left: 30px; */ 
	text-align: center;
}
.news:hover{
	background-color: #dcd9e0;
	padding-top: 3px;
}























-->