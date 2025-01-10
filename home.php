<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <!-- Guest Mode Modal -->
   
<div id="guestModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Welcome to the Sunny Hill Festival Website!</h2>
        <p>You are currently browsing as a guest. To access more features, please log in or sign up.</p>
        <a href="contactus.php"><button>Log In</button></a>
        <a href="contactus.php"><button>Sign Up</button></a>
    </div>
</div>

<nav class="navbar">
        <a href="home.php">Home</a>
        <a href="shows&events.html">Shows&Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.html">About Us</a>
        <a href="contactus.php">Log In</a>
    </nav>
  


    <img class="img1" src="sunnyhill.jpg">
     <div class="centered"><h5>Opening on Thursday, August 31st</h5>
        <h1>The Sunny Hill Festival 2025</h1>
       <a href="tickets.html"><button id="purchaseBtn">Purchase Tickets</button></a> 
     </div>
       <div class="show-event">
        <div class="show-event2">
         <img src="showevent.jpg">
         <img src="showevent2.jpg">
         <img src="showevent3.jpg">
         <img src="showevent4.jpg"> 
 </div>
               
       </div>
</div>
<div class="festival-info">
    <h2>SUNNY HILL FESTIVAL 2025</h2>
    <p>The Sunny Hill Festival, held annually in Pristina, Kosovo, is a vibrant celebration of music and culture,
        attracting both local and international artists. Founded by the globally recognized band, Dua Lipa,
        the festival seeks to foster a sense of community and showcase the rich musical heritage of the region.
        The event typically features a diverse lineup across various genres, including pop,
        rock, and electronic music,alongside art installations and local food vendors.
        The Sunny Hill Festival is held at the Sunny Hill Park, located in Pristina, Kosovo.
        It's a popular music festival featuring a lineup of various artists and genres,
        typically taking place during the summer months.</p>


</div>
<div class="grid">
    <div class="grid-item">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.433431424329!2d21.16768097586631!3d42.65216967116733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec39d986beb%3A0xd29a6f7051e16907!2sSunny%20Hill%20Foundation!5e0!3m2!1sen!2s!4v1683888517432!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
     </div>
    
     <!--<div class="grid">
        <div class="grid-item">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.433431424329!2d21.16768097586631!3d42.65216967116733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec39d986beb%3A0xd29a6f7051e16907!2sSunny%20Hill%20Foundation!5e0!3m2!1sen!2s!4v1683888517432!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
         </div>
         <div class="grid">
            <div class="grid-item">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.433431424329!2d21.16768097586631!3d42.65216967116733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec39d986beb%3A0xd29a6f7051e16907!2sSunny%20Hill%20Foundation!5e0!3m2!1sen!2s!4v1683888517432!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
             </div>
            -->
            <div class="grid-item">
                <div class="location-container">
                    <div class="location-box">
                        <h4>LOCATION</h4>
                    </div>
                    <div class="location-box">
                        <p>ENVER MALOKU Nr. 82</p>
                    </div>
                    <div class="location-box">
                        <p>PRISHTINA 10000</p>
                    </div>
                    <div class="location-box">
                        <p>KOSOVO</p>
                    </div>
                </div>
            </div>
            
             
</div> 

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

<script>
    var modal=document.getElementById("guestModal");
//merre span element e cila e mbyll guest modal
var span =document.getElementById("closeModal");
//per me tregu modalin automatikisht kur faqja hapet
window.onload=function(){
    modal.style.display="block";
}
//kur useri klikon ne span(x), mbyll guest modal
span.onclick=function(){
    modal.style.display="none";//e bon hide modal
}
//kur useri klikon kudo jashte modal,e mbyll
window.onclick=function(event){
    if(event.target == modal){
        modal.style.display="none";
    }
}
</script>

</body>
</html>
<!--
.navbar{
   background-color: white;
   text-align: center;
   padding: 20px;
}
.navbar a{
    text-decoration: none;
    padding: 40px;
    color: black;
    font-size: 20PX;
    font-weight: bold;
}
.navbar a:hover {
    color: #FF6347; /* Ndryshon ngjyrën në portokalli kur kalon mbi të */
}








-->

