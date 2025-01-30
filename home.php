<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* Siguron që faqja mos të ketë scroll horizontal */
}

.slider-container {
    position: relative;
    width: 100%;
    height: 80vh; /* Slider mbulon gjithë lartësinë e ekranit */
    overflow: hidden; /* Fsheh çdo gjë jashtë slider-it */
}

.slider-wrapper {
    display: flex;
    width: 100%; /* Mbështet fleksibilitetin për imazhet */
    height: 100%;
    transition: transform 0.5s ease-in-out; /* Lëviz imazhet në mënyrë të qetë */
}

.slider-wrapper img {
    flex: 0 0 100%; /* Siguron që çdo imazh zë 100% të gjerësisë */
    width: 100%;
    height: 100%;
    object-fit: cover; /* Përshtatja e imazheve në hapësirë */
}

.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    font-size: 24px;
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

.dots {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 5px;
}

.dot {
    height: 7px;
    width: 7px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}

.active-dot {
    background-color: rgb(29, 100, 192);
}
.static-gallery {
    display: flex; /* Foto rreshtohen horizontalisht */
    justify-content: center; /* Qendërzimi i të gjithë grupit të fotove */
    gap: 0; /* Eliminon hapësirën mes fotove */
    margin: 20px 0; /* Hapësirë lart dhe poshtë galerisë */
}

.static-gallery img {
    width: 180px; /* Gjerësia më e madhe e fotove */
    height: 180px; /* Lartësia më e madhe e fotove */
    object-fit: cover; /* Përshtatja e fotove në hapësirë */
    border-radius: 8px; /* Kënde të rrumbullakosura për një pamje të butë */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efekte gjatë hover */
}

.static-gallery img:hover {
    transform: scale(1.1); /* Zmadhohet kur kalon miu mbi foto */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Hijë për efekt estetik */
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
        <a href="shows&events.php">Shows&Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Log In</a>
    </nav>
  


   <!-- <img class="img1" src="sejdiuu.jpeg">
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


-->
<div class="slider-container">
        <div class="slider-wrapper">
            <img src="sejdiuu.jpeg" alt="Main Image">
            <div class="centered"><h5>Opening on Thursday, August 31st</h5>
                <h1>The Sunny Hill Festival 2025</h1>
               <a href="tickets.html"><button id="purchaseBtn">Purchase Tickets</button></a> 
            </div>
            <img src="bleona5.jpeg" alt="Event 1">
            <img src="bleona6.jpeg" alt="Event 2">
            <img src="sejdiu8.jpeg" alt="Event 3">
            <img src="sejdiu9.jpeg" alt="Event 4">
        </div>
        <button class="slider-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="slider-btn next" onclick="moveSlide(1)">&#10095;</button>
        <div class="dots">
            <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div> 
    <div class="static-gallery">
        <img src="showevent3.jpg" alt="Foto 1">
        <img src="showevent.jpg" alt="Foto 2">
        <img src="showevent2.jpg" alt="Foto 3">
        <img src="showevent4.jpg" alt="Foto 4">
        <img src="s.jpeg" alt="Foto 5">
        <img src="s1.jpeg" alt="Foto 6">
        <img src="s2.jpeg" alt="Foto 6">
        
        
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
const slides = document.querySelector('.slider-wrapper');
const images = document.querySelectorAll('.slider-wrapper img');
const dots = document.querySelectorAll('.dot');

function updateSlider() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`; // Lëviz slider-in
    dots.forEach(dot => dot.classList.remove('active-dot'));
    dots[currentIndex].classList.add('active-dot'); // Aktivizo pikën e saktë
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





