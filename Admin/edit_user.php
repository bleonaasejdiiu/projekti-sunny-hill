<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../contactus.php");
    exit;
}

include_once '../connect_db.php';
include_once '../Admin.php';

$database = new Database();
$conn = $database->connect();

$admin = new Admin($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $admin->updateUser($id, $username, $email, $age);

    header("Location: ../admin_dashboard.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE Id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #820a6b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #620746;
        }

        .form-container .cancel-btn {
            text-align: center;
            margin-top: 20px;
        }

        .form-container .cancel-btn a {
            color: #820a6b;
            text-decoration: none;
            font-size: 16px;
        }

        .form-container .cancel-btn a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>


    <div class="form-container">
        <h2>Edit User</h2>

        <form method="POST" action="edit_user.php">
            <input type="hidden" name="id" value="<?php echo $user['Id']; ?>">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $user['Username']; ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $user['Email']; ?>" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="<?php echo $user['Age']; ?>" required>

            <input type="submit" value="Update User">

        </form>

        <div class="cancel-btn">
            <a href="../admin_dashboard.php">Cancel</a>
        </div>
    </div>

</body>
</html>