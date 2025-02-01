<?php
session_start();
include_once 'connect_db.php';  // Klasën për lidhjen me databazën
include_once 'TicketsPurchase.php';  // Klasën që menaxhon blerjen e biletave

// Kontrollo nëse përdoruesi është loguar
if (!isset($_SESSION['id'])) {
    header("Location: contactus.php");  // Ridrejto nëse përdoruesi nuk është loguar
    exit();
}

// Kontrollo nëse formulari është dërguar me metodën POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Merr të dhënat nga formulari
    $ticketType = $_POST['ticket_type'];
    $quantity = $_POST['quantity'];
    $cvv = $_POST['cvv'];  // Ky informacion mund të përdoret për verifikim të mëtejshëm në sistemet e pagesës (nëse është i nevojshëm)
    $cardNumber = $_POST['card_number'];  // Ky informacion mund të përdoret për verifikim të mëtejshëm (për siguri duhet të jetë i koduar)

    // Krijo një instancë të klasës për blerjen e biletave
    $db = new Database();  // Lidhje me databazën
    $ticketPurchase = new TicketPurchase($db->connect());  // Krijo instancë të TicketPurchase

    // Proceso pagesën dhe blerjen e biletave
    $message = $ticketPurchase->processPayment($ticketType, $quantity, $cvv, $cardNumber);

    // Shfaq mesazhin përfundimtar
    echo "<p>$message</p>";
}
?>