<?php
session_start();
include_once 'connect_db.php'; 
include_once 'TicketsPurchase.php'; 

if (!isset($_SESSION['id'])) {
    header("Location: contactus.php");  
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticketType = $_POST['ticket_type'];
    $quantity = $_POST['quantity'];
    $cvv = $_POST['cvv'];  
    $cardNumber = $_POST['card_number'];  

    $db = new Database();  
    $ticketPurchase = new TicketPurchase($db->connect()); 

    $message = $ticketPurchase->processPayment($ticketType, $quantity, $cvv, $cardNumber);

    echo "<html>\n";
    echo "<head>\n";
    echo "<title>Ticket Confirmation</title>\n";
    echo "<style>\n";
    echo "body { font-family: Arial, sans-serif; background-color: #f9f9f9; text-align: center; padding: 50px; }\n";
    echo ".confirmation-card { background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; }\n";
    echo ".ticket-info { font-size: 18px; margin-top: 20px; color: #333; }\n";
    echo ".success-message { color: green; font-size: 22px; font-weight: bold; }\n";
    echo ".ticket-type { font-size: 20px; font-weight: bold; color: #555; }\n";
    echo ".button-container { margin-top: 20px; }\n";
    echo ".button { display: inline-block; background-color:rgb(2, 81, 97); color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin: 5px; }\n";
    echo ".button:hover { background-color:rgb(32, 118, 136); }\n";
    echo "</style>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<div class='confirmation-card'>\n";
    echo "<h1 class='success-message'>$message</h1>\n";
    echo "<div class='ticket-info'>\n";
    echo "<p class='ticket-type'>Ticket Type: $ticketType</p>\n";
    echo "<p>Quantity: $quantity</p>\n";
    echo "<p>Total Price: " . ($quantity * ($ticketType == 'VIP' ? 400 : ($ticketType == 'Regular' ? 200 : ($ticketType == 'Group of 3' ? 180 : 160)))) . " EUR</p>\n";
    echo "<p>Payment Status: Completed</p>\n";
    echo "</div>\n";
    echo "<p>Thank you for your purchase!</p>\n";
    echo "<div class='button-container'>\n";
    echo "<a href='tickets.php' class='button'>Go Back</a>\n";
    echo "<a href='logout.php' class='button'>Logout</a>\n";
    echo "</div>\n";
    echo "</div>\n";
    echo "</body>\n";
    echo "</html>\n";
}
?>