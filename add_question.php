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