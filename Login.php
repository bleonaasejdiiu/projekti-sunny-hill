<?php
class Login {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function authenticate($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE Email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row && password_verify($password, $row['Password'])) {
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['id'] = $row['Id'];
            $_SESSION['role'] = $row['Role'];
    
            if ($row['Role'] === 'admin') {
                return 'admin';
            }
            return 'user';
        }
        return false;
    }
}
?>