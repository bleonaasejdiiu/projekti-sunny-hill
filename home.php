<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
     .show-event {
    position: relative;
    width: 85%; /* Gjerësia pak më e vogël se 100% */
    max-width: 800pxpx; /* Gjerësi maksimale për ekrane të mëdha */
    height: 500px; /* Lartësia mbetet e njëjtë */
    overflow: hidden;
    margin: 0 auto; /* Vendos slider-in në qendër */
    border: none;
}

.show-event2 {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
    height: 100%;
}

.show-event2 img {
    width: 100%;
    height: 100%; /* Fotoja mbulon të gjithë hapësirën */
    object-fit: cover; /* Përshtatja e imazhit */
    flex-shrink: 0;
}
.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    font-size: 18px;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

/* Pikat për navigim */
.dots {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}

.dot {
    height: 12px;
    width: 12px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}

.active-dot {
    background-color:rgb(29, 100, 192);
}
</style>

    
   
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
  


    <img class="img1" src="sejdiuu.jpeg">
     <div class="centered"><h5>Opening on Thursday, August 31st</h5>
        <h1>The Sunny Hill Festival 2025</h1>
       <a href="tickets.html"><button id="purchaseBtn">Purchase Tickets</button></a> 
     </div>
     <div class="show-event">
        <div class="show-event2">
            <img src="bleona5.jpeg" alt="Event 1">
            <img src="sejdiuuu.jpeg" alt="Event 2">
            <img src="bleona6.jpeg" alt="Event 3">
            <img src="bleona3.jpeg" alt="Event 4">
        </div>
        <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <div class="dots">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
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
        <img src="emerald.png"> 
        <img src="prince.jpg">
        <img src="vodafone.jpg">
    </div>
</div>
<script>
    let currentIndex = 0;
    const slides = document.querySelector('.show-event2');
    const images = document.querySelectorAll('.show-event2 img');
    const dots = document.querySelectorAll('.dot');

    function updateSlider() {
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach(dot => dot.classList.remove('active-dot'));
        dots[currentIndex].classList.add('active-dot');
    }

    function moveSlide(step) {
        currentIndex = (currentIndex + step + images.length) % images.length;
        updateSlider();
    }

    function currentSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    // Auto-slide çdo 5 sekonda
    setInterval(() => {
        moveSlide(1);
    }, 5000);

    // Inicializimi i slider-it
    updateSlider();
</script>

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





