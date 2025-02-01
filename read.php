<?php 
include 'connect_db.php'; 
$db = new Database();
$connection = $db->connect(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read USER</title>
</head>
<body>
    <h2>USER List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Aktionet</th>
            <th>Question</th>
        </tr>

        <?php
        $sql = "SELECT * FROM user";  
        $stmt = $connection->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        
            if (isset($row['id'])) {
                $name = $row['emri']; 
                $mbiemri = $row['mbiemri'];  
                $email = $row['email'];  
                $question = $row['question'];  

                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$name}</td>
                        <td>{$mbiemri}</td>
                        <td>{$email}</td>
                        <td>
                            <a href='update.php?id={$row['id']}'>Update</a> |
                            <a href='delete.php?id={$row['id']}'>Delete</a>
                        </td>
                        <td>{$question}</td>  <!-- Shtoni question këtu -->
                    </tr>";
            }
        }
        ?>
    </table>
</body>
</html>