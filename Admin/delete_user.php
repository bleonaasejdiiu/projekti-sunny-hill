<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../contactus.php");
    exit;
}

include_once 'connect_db.php';
$admin = new Admin($conn);

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $admin->deleteUser($userId);
    header("Location: ../admin_dashboard.php");
    exit;
}
?>
