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
    <style>
    form {
    width: 350px;
    margin: 0 auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: 2px solid #f0f0f0;
}

/* Stili për titullin */
form h2 {
    text-align: center;
    color:rgb(228, 119, 210);
    font-family: 'Arial', sans-serif;
    font-size: 28px;
    margin-bottom: 20px;
}

/* Stili për etiketat */
label {
    font-size: 16px;
    color: #333;
    margin-bottom: 8px;
    display: block;
    font-weight: bold;
}

/* Stili për inputet */
input[type="text"],
input[type="number"],
input[type="email"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0 20px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="email"]:focus {
    border-color:rgb(203, 92, 190);
    outline: none;
}

/* Stili për butonin */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color:rgb(199, 55, 175);
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color:rgb(245, 119, 190);
}

/* Stili për mesazhin e suksesit ose gabimit */
.success, .error {
    text-align: center;
    font-size: 16px;
    margin-top: 20px;
}

.success {
    color: #4CAF50;
}

.error {
    color: #FF0000;
}
</style>

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
