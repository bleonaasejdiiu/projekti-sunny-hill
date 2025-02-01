<?php include 'connect_db.php';
//session

//perfundimi
$db = new Database();
$connection = $db->connect(); 
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update USER</title>
</head>
<body>
    <h2>Update USER</h2>

    <?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$student) {
            die("Useri me ID $id nuk u gjet!");
        }
    } else {
        die("ID nuk është specifikuar në URL!");
    }

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $mbiemri = $_POST['mbiemri'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $question = $_POST['question'];  

        $sql = "UPDATE user SET emri = :emri, mbiemri = :mbiemri, mosha = :mosha, email = :email, question = :question WHERE id = :id";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            ':emri' => $name,
            ':mbiemri' => $mbiemri,
            ':mosha' => $age,
            ':email' => $email,
            ':question' => $question,  
            ':id' => $id
        ]);

        echo "<p style='color: green;'>Useri u përditësua me sukses!</p>";
        header("Location: read.php");
        exit;
    }
    ?>

    <form method="POST" action="">
        <label for="name">Emri:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($student['emri']); ?>" required><br>
        
        <label for="mbiemri">Mbiemri:</label>
        <input type="text" name="mbiemri" value="<?php echo htmlspecialchars($student['mbiemri']); ?>" required><br>
        
        <label for="age">Mosha:</label>
        <input type="number" name="age" value="<?php echo htmlspecialchars($student['mosha']); ?>" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required><br>

        <label for="question">Question:</label>
        <input type="text" name="question" value="<?php echo htmlspecialchars($student['question']); ?>" required><br><br>
        
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
