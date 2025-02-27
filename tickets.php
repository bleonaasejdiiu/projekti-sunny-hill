<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="tickets-style.css">

    <style>
       .container{
    min-height: 100vh;
    background: #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    padding-bottom: 60px;
   
}
.card-container{
    margin-top:70px;
}
.container form{
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 10px 15px rgba(0,0,0,.1);
    padding: 20px;
    width: 600px;
    padding-top: 160px;
   
}

.container form .inputBox {

  display: flex;
  flex-direction: column;
  gap: 20px; 
}

.container form .inputBox span{
    display: block;
    color:#999;
    padding-top: 10px;
}

.container form .inputBox input,
.container form .inputBox select{
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border:1px solid rgba(0,0,0,.3);
    color:#444;
}

.container form .flexbox {
  display: flex;
  gap: 30px;
}

.container form .flexbox .inputBox{
    flex:1 1 150px;
}

.container form .submit-btn{
    width: 100%;
    background: linear-gradient(to right,  rgb(113, 79, 117), rgb(138, 109, 134), rgb(189, 137, 183), rgb(189, 137, 183), rgb(138, 109, 134), rgb(113, 79, 117)); 
    margin-top: 20px;
    padding: 10px;
    font-size: 20px;
    color:#fff;
    border-radius: 10px;
    cursor: pointer;
    transition: .2s linear;
}

.container form .submit-btn:hover{
    letter-spacing: 2px;
    opacity: .8;
}

.container .card-container{
    margin-bottom: -150px;
    position: relative;
    height: 250px;
    width: 400px;
}

.container .card-container .front{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0; left: 0;
    background: linear-gradient(to right,  rgb(113, 79, 117), rgb(138, 109, 134), rgb(189, 137, 183), rgb(189, 137, 183), rgb(138, 109, 134), rgb(113, 79, 117)); 
    border-radius: 5px;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    padding:20px;
    transform:perspective(1000px) rotateY(0deg);
    transition:transform .4s ease-out;
}

.container .card-container .front .image{
    display: flex;
    align-items:center;
    justify-content: space-between;
    padding-top: 10px;
}

.container .card-container .front .image img{
    height: 50px;
}

.container .card-container .front .card-number-box{
    padding:30px 0;
    font-size: 22px;
    color:#fff;
}

.container .card-container .front .flexbox{
    display: flex;
}

.container .card-container .front .flexbox .box:nth-child(1){
    margin-right: auto;
}

.container .card-container .front .flexbox .box{
    font-size: 15px;
    color:#fff;
}

.container .card-container .back{
    position: absolute;
    top:0; left: 0;
    height: 100%;
    width: 100%;
    background: linear-gradient(to right,  rgb(113, 79, 117), rgb(138, 109, 134), rgb(189, 137, 183), rgb(189, 137, 183), rgb(138, 109, 134), rgb(113, 79, 117)); 
    border-radius: 5px;
    padding: 20px 0;
    text-align: right;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    transform:perspective(1000px) rotateY(180deg);
    transition:transform .4s ease-out;
}

.container .card-container .back .stripe{
    background: #000;
    width: 100%;
    margin: 10px 0;
    height: 50px;
}

.container .card-container .back .box{
    padding: 0 20px;
}

.container .card-container .back .box span{
    color:#fff;
    font-size: 15px;
}

.container .card-container .back .box .cvv-box{
    height: 50px;
    padding: 10px;
    margin-top: 5px;
    color:#333;
    background: #fff;
    border-radius: 5px;
    width: 100%;
}

.container .card-container .back .box img{
    margin-top: 30px;
    height: 30px;
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
      
    <div class="pjesa1">
          <h1>TICKETS</h1>
    </div>

    <div class="container1">
    <div class="card">
       <h1>Regular</h1>
       <h1 class="price">200€</h1>
       <a href="#card-payment"><button class="button1" id="button">Buy Now</button></a>
    </div>
       <div class="card">
        <h1>Group of 3</h1>
        <h1 class="price">180€</h1>
        <p>per tickets</p>
        <a href="#card-payment"><button class="button1">Buy Now</button></a>
      </div>
      <div class="card">
        <h1>Group of 5</h1>
        <h1 class="price">160€</h1>
        <p>per tickets</p>
        <a href="#card-payment"><button class="button1">Buy Now</button></a>
      </div>
      <div class="card">
        <h1>VIP Tickets</h1>
        <h1 class="price">400€</h1>
        <a href="#card-payment"><button class="button1" id="button">Buy Now</button></a>
      </div>


    </div>

    <!--ANIMACIONI ME ICONA TICKETS-->
    <div class="tickets-logo-section">
      <h2>Available Tickets</h2>
      <div class="tickets-logos">
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          <i class="fa-solid fa-ticket ticket-icon"></i>
          
      </div>
  </div>



  <div class="faq-container">
    <div class="faq-item">
        <input type="checkbox" id="faq1">
        <label class="faq-question" for="faq1">
            Can I buy a parking ticket? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Yes, parking tickets will be available for purchase soon.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq2">
        <label class="faq-question" for="faq2">
            Can I refund my ticket? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">All tickets are non-transferable and non-refundable.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq3">
        <label class="faq-question" for="faq3">
            What are the festival dates? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Sunny Hill Festival 2024 dates are 25, 26, 27, and 28 July.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq4">
        <label class="faq-question" for="faq4">
            How do I get to the festival? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Happy news! We have a new location this year and we can’t wait to meet you there. Our new venue is in the village of Bërnicë e Poshtme, just a 15-minute drive from the city. We recommend using shuttle buses dedicated for the Festival venue, as there will be limited parking available.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq5">
        <label class="faq-question" for="faq5">
            Where can I buy tickets? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">All festival tickets will be available online on our website: sunnyhillfestival.com. All tickets are 4-day passes.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq6">
        <label class="faq-question" for="faq6">
            The minimum age to attend? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">The minimum age to attend the festival alone is 16. Youngsters below 16 should be accompanied by their parents or any other adult.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq7">
        <label class="faq-question" for="faq7">
            Can I work as a volunteer at the festival? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Yes, you can work as a volunteer. All the information will be posted in the Sunny Hill Festival website and Facebook page, so stay tuned to be part of the biggest festival in the region.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq8">
        <label class="faq-question" for="faq8">
            What is the difference between a Regular and VIP ticket? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Regular ticket holders will enter through the main gate and experience the festival right in front of the main stage. VIP ticket holders will have a special entrance and a designated VIP hangout space.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq9">
        <label class="faq-question" for="faq9">
            How to use smart wristband? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Sunny Hill Festival is providing an easy and secure cashless payment system. You’ll be able to buy all that you want upon topping-up your wristband. When ordering food and drinks, simply show your wristband to bartenders for scan! </p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq10">
        <label class="faq-question" for="faq10">
            What is the check-in process? <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Dont forget your ID card!Upon presenting your ID card and ticket at the venue gate, you will receive the festival QR bracelet, our famous wristband. It is linked to your unique ID and cannot be exchanged or transferred to another individual.</p>
    </div>
     
    <div class="faq-item">
        <input type="checkbox" id="faq11">
        <label class="faq-question" for="faq11">
            Use of tickets for promotions <span class="arrow">▼</span>
        </label>
        <p class="faq-answer">Ticket can not be used for any kind of promotional activity (e.g. prize-winning games and/or similar), without Sunny Hill Festivals consent.</p>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq12">
        <label class="faq-question" for="faq12">
            Where can i top-up my wristband<span class="arrow">▼</span>
        </label>
        <p class="faq-answer">You will be able to top-up your wristband through our app and directly at the venue.</p>
    </div>


</div>
<div class="tickets-logo-section">
    <h2>Available Tickets</h2>
    <div class="tickets-logos">
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        <i class="fa-solid fa-ticket ticket-icon"></i>
        
    </div>
</div>
<!----------------CARD PAYMENT--------------------->

<div class="container" id="card-payment">
    <div class="card-container">
        <div class="front">
            <div class="image">
                <img src="chip.png" alt="">
                <img src="visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">Ticket</span>
                        <span class="exp-year">Quantity</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="visa.png" alt="">
            </div>
        </div>
    </div>

    <form action="process_payment.php" method="POST">
        <div class="inputBox">
            <span>card number</span>
            <input type="text" maxlength="16" name="card_number" class="card-number-input" required>
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" name="card_holder" class="card-holder-input" required>
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>Ticket Type</span>
                <select name="ticket_type" class="ticket-type-input" required>
                    <option value="" disabled selected>Select Ticket</option>
                    <option value="Regular">Regular - 200€</option>
                    <option value="Group of 3">Group of 3 - 180€ per ticket</option>
                    <option value="Group of 5">Group of 5 - 160€ per ticket</option>
                    <option value="VIP">VIP Ticket - 400€</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Quantity</span>
                <input type="number" name="quantity" min="1" class="quantity-input" required>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" name="cvv" class="cvv-input" required>
            </div>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
    </form>
</div>


<script>
    document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}
    document.querySelector('.ticket-type-input').oninput = () => {
    document.querySelector('.exp-month').innerText = document.querySelector('.ticket-type-input').value;
};

document.querySelector('.quantity-input').oninput = () => {
    document.querySelector('.exp-year').innerText = document.querySelector('.quantity-input').value;
};
const frontCard = document.querySelector('.front');
const backCard = document.querySelector('.back');
const cvvInput = document.querySelector('.cvv-input');

cvvInput.addEventListener('focus', () => {
  frontCard.style.transform = 'rotateY(180deg)';
  backCard.style.transform = 'rotateY(360deg)';
});

cvvInput.addEventListener('blur', () => {
  frontCard.style.transform = 'rotateY(0deg)';
  backCard.style.transform = 'rotateY(180deg)';
});

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}
document.querySelector('form').addEventListener('submit', function (e) {
    let isValid = true;
    let errorMessage = "";

   
    const cardNumber = document.querySelector('.card-number-input').value.trim();
    if (!/^\d{16}$/.test(cardNumber)) {
        errorMessage += "- Card number must be 16 digits.\n";
        isValid = false;
    }

  
    const cardHolder = document.querySelector('.card-holder-input').value.trim();
    if (!/^[a-zA-Z\s]{3,}$/.test(cardHolder)) {
        errorMessage += "- Card holder name must have at least 3 characters and contain only letters.\n";
        isValid = false;
    }

 
    const cvv = document.querySelector('.cvv-input').value.trim();
    if (!/^\d{3,4}$/.test(cvv)) {
        errorMessage += "- CVV must be 3 or 4 numeric digits.\n";
        isValid = false;
    }

 
    const quantity = document.querySelector('.quantity-input').value;
    if (quantity <= 0 || isNaN(quantity)) {
        errorMessage += "- Quantity must be a positive number.\n";
        isValid = false;
    }

   
    if (!isValid) {
        e.preventDefault();
        alert("Please :\n" + errorMessage);
    }
});
</script>


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