<?php
session_start();

include("connect_db.php");
include("User.php");

if(!isset($_SESSION['valid'])){
    header("Location: contactus.php");
    exit;
}

$db = new Database();
$conn = $db->connect();
$home = new User($conn);

$userData = $home->getUserData($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgb(113, 79, 117), rgb(189, 137, 183), rgb(113, 79, 117));
            color: #333;
        }

        main {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .dashboard-container {
            width: 90%;
            max-width: 1100px;
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            padding-bottom:80px;
            text-align: center;
        }

        .dashboard-header {
            margin-bottom: 20px;
        }

        .dashboard-header h1 {
            font-size: 28px;
            color: rgb(113, 79, 117);
        }

        .dashboard-header p {
            font-size: 18px;
            color: #666;
        }

        .dashboard-options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .option-card {
            background-color: #f9f5f5;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .option-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .option-card i {
            font-size: 40px;
            color: rgb(189, 137, 183);
            margin-bottom: 10px;
        }

        .option-card h3 {
            font-size: 18px;
            color: #333;
        }

        .option-card p {
            font-size: 14px;
            color: #666;
        }

        @media (max-width: 600px) {
            .option-card {
                width: 100%;
            }
        }
        .option-card a {
    background-color: #ac96a6;
    text-decoration: none;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: inline-block; 
    margin-top: 10px;
}

        .option-card a:hover {
            background-color: #9e7b95;
        }
    
        .logout-a {
    background-color: #ac96a6;
    padding: 12px 25px;
    border-radius: 8px; 
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.2s ease;
    position: absolute;
    right: 10px; 
    display: inline-block;
    cursor: pointer;
}

.logout-a:hover {
    background-color: #9e7b95;
    transform: translateY(-3px); 
}

.logout-a:active {
    background-color: #820a6b;
    transform: translateY(0); 
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

       <a href="logout.php" class="logout-a">Log Out</a>
    </nav>

    <main>
        <div class="dashboard-container">
            <div class="dashboard-header">
            <h1>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></h1>
                <p>Here are your options:</p>
            </div>

            <div class="dashboard-options">
                <div class="option-card">
                    <i class="fa-solid fa-ticket"></i>
                    <h3>My Tickets</h3>
                    <p>View and manage your tickets.</p>
                       <a href="tickets.php">View Tickets</a>
                </div>

                <div class="option-card">
                    <i class="fa-solid fa-calendar"></i>
                    <h3>Events</h3>
                    <p>Check upcoming events.</p>
                    <a href="shows&events.php">View Events</a>
                </div>

                <div class="option-card">
                    <i class="fa-solid fa-cog"></i>
                    <h3>Update Profile</h3>
                    <p>Manage your account settings.</p>
                    <a href="update_profile.php">Update Profile</a>

                </div>
            </div>
        </div>
    </main>
</body>
</html>

