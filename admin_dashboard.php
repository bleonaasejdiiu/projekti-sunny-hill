<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: contactus.php");
    exit;
}

if (isset($_SESSION['error_message'])) {
    echo "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; border: 1px solid #f5c6cb; margin-bottom: 10px;'>
            <strong>Gabim!</strong> ".$_SESSION['error_message'].".
          </div>";
    unset($_SESSION['error_message']);
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
   body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
}

.logout-btn {
    float: right;
    display: inline-block;
}

.dashboard-content {
    margin: 15px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 40px;
}

h2 {
    color: #333;
    margin-top: 80px;
}

.btn1 {
    background-color: #820a6b;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.btn1:hover {
    background-color: #620746;
}

.admin-table-container {
    overflow-x: auto; 
    margin-top: 20px;
}

.admin-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    min-width: 600px; 
}

.admin-table th, .admin-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
    color: #333;
}

.admin-table th {
    background-color: #820a6b;
    color: white;
    text-transform: uppercase;
}

.admin-table tr:hover {
    background-color: #f9f9f9;
}

.admin-table a {
    color: #007BFF;
    text-decoration: none;
}

.admin-table a:hover {
    text-decoration: underline;
}

/* Responsiveness */
@media (max-width: 768px) {
    .logout-btn {
        float: none;
        display: block;
        margin: 10px 0;
        text-align: center;
    }

    h1 {
        font-size: 1.8em;
    }

    .dashboard-content {
        margin: 10px;
        padding: 15px;
    }

    .btn1 {
        width: 100%;
        padding: 12px;
    }

    .admin-table-container {
        padding-left: 10px;
        padding-right: 10px;
    }

    .admin-table {
        font-size: 14px;
        min-width: 500px; 
    }

    .admin-table th, .admin-table td {
        padding: 8px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1.6em;
    }

    .dashboard-content {
        padding: 10px;
    }

    .btn1 {
        width: 100%;
        padding: 12px;
    }

    .admin-table th, .admin-table td {
        font-size: 12px;
        padding: 6px;
    }

    .admin-table {
        font-size: 12px;
        min-width: 320px; 
    }
}
    </style>
</head>
<body>

    <nav class="navbar">
        <div>
            <a href="home.php">Home</a>
            <a href="shows&events.php">Shows & Events</a>
            <a href="news.php">News</a>
            <a href="Tickets.php">Tickets</a>
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Log In</a> 
            <a href="logout.php" class=" btn1 logout-btn">Log Out</a>
        </div>
       
    </nav>

    
    <div class="dashboard-content">
        <h1>Welcome to the Admin Dashboard!</h1>
       
       

        
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

        <a href="Admin/add_user.php"><button class="btn1">Add New User</button></a>
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
                <tr>
                <td><?= $question['emri'] ?></td>
                <td><?= $question['mbiemri'] ?></td>
                <td><?= $question['mosha'] ?></td>
                <td><?= $question['email'] ?></td>
                <td><?= $question['question'] ?></td>
                <td>
                <a href="update.php?id=<?= $question['Id'] ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $question['Id'] ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="add_question.php"><button class="btn1">Add New Question</button></a>
    </div>
     
</body>
</html>