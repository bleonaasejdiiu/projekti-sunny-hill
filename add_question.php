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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Merr të dhënat nga formulari
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $question = $_POST['question'];
 // Shto pyetjen në databazë
 $result = $admin->addQuestion($name, $surname, $age, $email, $question);
 if ($result) {
    echo "<p style='color: green;'>Pyetja u shtua me sukses!</p>";
} else {
    echo "<p style='color: red;'>Gabim gjatë shtimit të pyetjes. Provoni përsëri!</p>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tickets-style.css">

    <style>
        /* Styles for the form */
        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: rgb(131, 48, 113);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .form-container button:hover {
            background-color: rgb(117, 0, 91);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add a New Question</h2>
        
        <form action="add_question.php" method="POST">
            <label for="name">First Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">Last Name:</label>
            <input type="text" id="surname" name="surname" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="question">Question:</label>
            <textarea id="question" name="question" rows="4" required></textarea>

            <button type="submit">Add Question</button>
        </form>
    </div>

</body>
</html>
