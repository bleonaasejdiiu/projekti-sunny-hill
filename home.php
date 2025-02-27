<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body {
    margin: 0;
    padding: 0;
    overflow-x: hidden; 
}

.slider-container {
    position: relative;
    width: 100%;
    height: 80vh; 
    overflow: hidden; 
}

.slider-wrapper {
    display: flex;
    width: 100%; 
    height: 100%;
    transition: transform 0.5s ease-in-out; 
}

.slider-wrapper img {
    flex: 0 0 100%; 
    width: 100%;
    height: 100%;
    object-fit: cover; 
}

.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(243, 230, 230, 0.92);
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
    display: flex; 
    justify-content: center; 
    gap: 0; 
    margin: 20px 0; 
}

.static-gallery img {
    width: 180px; 
    height: 180px; 
    object-fit: cover; 
    border-radius: 8px; 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}

.static-gallery img:hover {
    transform: scale(1.1); 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
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

        <a href="user_dashboard.php" class="profile-icon">
        <i class="fa-solid fa-user-large"></i>
    </a>
    </nav>


   <style>
.centered h1 {
  color: white !important;
  background: transparent !important;
}
.centered {
  color: white;
}

   </style>
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
<script>
    let currentIndex = 0;
const slides = document.querySelector('.slider-wrapper');
const images = document.querySelectorAll('.slider-wrapper img');
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


setInterval(() => {
    moveSlide(1);
}, 5000);


updateSlider();

</script>

<script>
    var modal=document.getElementById("guestModal");

var span =document.getElementById("closeModal");

window.onload=function(){
    modal.style.display="block";
}

span.onclick=function(){
    modal.style.display="none";
}

window.onclick=function(event){
    if(event.target == modal){
        modal.style.display="none";
    }
}
</script>

</body>
</html>





