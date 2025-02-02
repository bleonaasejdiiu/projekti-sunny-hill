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

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    try {
        $admin->deleteUser($userId);
        header("Location: ../admin_dashboard.php");
        exit;
    } catch (Exception $e) {
       
        $_SESSION['error_message'] = $e->getMessage();
        header("Location: ../admin_dashboard.php");
        exit;
    }
}
?>