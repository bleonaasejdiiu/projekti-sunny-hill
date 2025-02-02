<?php
session_start();

if(!isset($_SESSION['valid'])){
    header("Location: contactus.php");
    exit;
}

require_once 'connect_db.php'; 

$db = new Database();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("UPDATE users SET Username = ?, Email = ?, Age = ? WHERE Id = ?");
    $stmt->execute([$username, $email, $age, $_SESSION['user_id']]);

    echo "Profile updated successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #ac96a6;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #9e7b95;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Profile</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="New Username" required>
            <input type="email" name="email" placeholder="New Email" required>
            <input type="number" name="age" placeholder="New Age" required>
            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>