<?php
class Register {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

   
    public function verifyEmail($email) {
        $stmt = $this->conn->prepare("SELECT Email FROM users WHERE Email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    
    public function registerUser($username, $email, $age, $password) {
     
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        
        $stmt = $this->conn->prepare("INSERT INTO users (username, email, age, password) VALUES (:username, :email, :age, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', $hashedPassword);

        return $stmt->execute();
    }
}
?>