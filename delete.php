<?php include 'connect_db.php';
$db = new Database();
$connection = $db->connect(); 
 ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "User deleted successfully!";
    header("Location: read.php");
}
?>