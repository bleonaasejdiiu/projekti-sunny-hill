<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../contactus.php");
    exit;
}

include_once '../connect_db.php';
include_once '../Admin.php';

// Krijojmë lidhjen me databazën
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

<form method="POST" action="edit_user.php">
    <input type="hidden" name="id" value="<?php echo $user['Id']; ?>">

    <label for="username">Username</label><br>
    <input type="text" id="username" name="username" value="<?php echo $user['Username']; ?>" required><br><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" value="<?php echo $user['Email']; ?>" required><br><br>

    <label for="age">Age</label><br>
    <input type="number" id="age" name="age" value="<?php echo $user['Age']; ?>" required><br><br>

    <input type="submit" value="Update User">
</form>