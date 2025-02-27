<?php

include_once 'connect_db.php'; 
include_once 'Login.php';

class TicketPurchase {
    private $conn;
    private $userId;

    public function __construct($db) {
        $this->conn = $db;
        if (isset($_SESSION['id'])) {
            $this->userId = $_SESSION['id'];
        } else {
            header("Location: contactus.php");
            exit();
        }
    }

    public function processPayment($ticketType, $quantity, $cvv, $cardNumber) {
     
        $prices = [
            'Regular' => 200,
            'Group of 3' => 180,
            'Group of 5' => 160,
            'VIP' => 400
        ];

        if (!array_key_exists($ticketType, $prices)) {
            return 'Invalid ticket type';
        }

        $totalPrice = $prices[$ticketType] * $quantity;

        
        $stmt = $this->conn->prepare("INSERT INTO tickets (user_id, ticket_type, quantity, total_price, payment_status) VALUES (:user_id, :ticket_type, :quantity, :total_price, 'Completed')");
        $stmt->bindParam(':user_id', $this->userId);
        $stmt->bindParam(':ticket_type', $ticketType);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':total_price', $totalPrice);
        
        if ($stmt->execute()) {
            return 'Payment successful, tickets purchased!';
        } else {
            return 'Error processing payment';
        }
    }
}
?>
