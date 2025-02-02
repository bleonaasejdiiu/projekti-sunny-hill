
<?php 
include 'connect_db.php';
$db = new Database();
$connection = $db->connect(); 
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':id' => $id]);


    echo "<div class='delete-message'>
            <h2>User Deleted</h2>
            <p>User has been successfully deleted from the system.</p>
            <button onclick=\"window.location.href='admin_dashboard.php';\">Go Back</button>
          </div>";

    
    header("Refresh: 3; url=admin_dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <style>
        .delete-message {
            width: 350px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 2px solid #f0f0f0;
            text-align: center;
        }

       
        .delete-message h2 {
            text-align: center;
            color: #FF6347; 
            font-family: 'Arial', sans-serif;
            font-size: 28px;
            margin-bottom: 20px;
        }

        
        .delete-message p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        
        .delete-message button {
            width: 100%;
            padding: 12px;
            background-color:rgb(246, 58, 205); 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-message button:hover {
            background-color:rgb(246, 57, 204); 
        }
    </style>
</head>
<body>
</body>
</html>