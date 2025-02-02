
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
    echo "body { font-family: 'Roboto', sans-serif; background: #f0f4f7; margin: 0; padding: 0; }\n";
    echo ".container { display: flex; justify-content: center; align-items: center; height: 100vh; }\n";
    echo ".confirmation-card { background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); max-width: 500px; text-align: center; }\n";
    echo ".confirmation-card h1 { color: #4CAF50; font-size: 28px; margin-bottom: 20px; }\n";
    echo ".ticket-info { font-size: 18px; margin-top: 20px; color: #333; }\n";
    echo ".ticket-type { font-size: 20px; font-weight: bold; color: #555; }\n";
    echo ".price { font-size: 22px; color: #ff6f61; margin-top: 10px; }\n";
    echo ".button-container { margin-top: 30px; }\n";
    echo ".button { display: inline-block; background-color: #2d6a4f; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s; }\n";
    echo ".button:hover { background-color: #1b4d3f; }\n";
    echo ".back-button { background-color: #d3d3d3; color: #333; margin-right: 15px; }\n";
    echo ".back-button:hover { background-color: #bbb; }\n";
    echo "</style>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<div class='container'>\n";
    echo "<div class='confirmation-card'>\n";
    echo "<h1>$message</h1>\n";
    echo "<div class='ticket-info'>\n";
    echo "<p class='ticket-type'>Ticket Type: <strong>$ticketType</strong></p>\n";
    echo "<p>Quantity: <strong>$quantity</strong></p>\n";
    echo "<p class='price'>Total Price: <strong>" . ($quantity * ($ticketType == 'VIP' ? 400 : ($ticketType == 'Regular' ? 200 : ($ticketType == 'Group of 3' ? 180 : 160)))) . " EUR</strong></p>\n";
    echo "<p>Payment Status: <strong style='color: green;'>Completed</strong></p>\n";
    echo "</div>\n";
    echo "<p>Thank you for your purchase!</p>\n";
    echo "<div class='button-container'>\n";
    echo "<a href='tickets.php' class='button back-button'>Go Back</a>\n";
    echo "<a href='logout.php' class='button'>Logout</a>\n";
    echo "</div>\n";
    echo "</div>\n";
    echo "</div>\n";
    echo "</body>\n";
    echo "</html>\n";
}
?>