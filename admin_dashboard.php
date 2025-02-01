<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: contactus.php");
    exit;
}

include_once 'connect_db.php';
include_once 'Admin.php';

$database = new Database();
$conn = $database->connect();

if (!$conn) {
    die("Lidhja me databazën nuk u realizua.");
}

$admin = new Admin($conn);
$usersWithTickets = $admin->getUsersWithTickets();
$questions = $admin->getAllQuestions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tickets-style.css">

    <style>
      
.dashboard-content {
    padding: 20px;
    background-color: #f4f4f4;
}

h1 {
    color: #333;
    text-align: center;
}

.btn {
    background-color: rgb(131, 48, 113);
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    text-align: center;
    display: inline-block;
    margin: 20px;
}

.btn:hover {
    background-color: rgb(117, 0, 91);
}

/* Table styles */
.admin-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.admin-table th, .admin-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.admin-table th {
    background-color: #333;
    color: white;
}

.admin-table tr:hover {
    background-color: #f2f2f2;
}

.admin-table a {
    color: #007BFF;
    text-decoration: none;
}

.admin-table a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
 
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="shows&events.php">Shows & Events</a>
        <a href="news.php">News</a>
        <a href="Tickets.php">Tickets</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Log In</a>
    </nav>

    
    <div class="dashboard-content">
        <h1>Welcome to the Admin Dashboard!</h1>
        <p>Hello, <?= $_SESSION['username'] ?>!</p>
        <a href="logout.php"><button class="btn">Log Out</button></a>

        
        <h2>User and Ticket Information</h2>
        <table class="admin-table">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Age</th>
                <th>Ticket Type</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Payment Status</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($usersWithTickets as $user): ?>
            <tr>
                <td><?= $user['Username'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['Age'] ?></td>
                <td><?= $user['ticket_type'] ?? 'No ticket' ?></td>
                <td><?= $user['quantity'] ?? '-' ?></td>
                <td><?= $user['total_price'] ? "{$user['total_price']} EUR" : '-' ?></td>
                <td><?= $user['payment_status'] ?? '-' ?></td>
                <td>
                    <a href="Admin/edit_user.php?id=<?= $user['Id'] ?>">Edit</a> | 
                    <a href="Admin/delete_user.php?id=<?= $user['Id'] ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="Admin/add_user.php"><button class="btn">Add New User</button></a>
        <h2>User Questions</h2>
        <table class="admin-table">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Question</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($questions as $question): ?>
      
     
</body>
</html>