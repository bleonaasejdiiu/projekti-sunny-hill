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
