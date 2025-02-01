<?php
class Admin {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Merr listën e përdoruesve
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT Id, Username, Email, Age FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  
    public function addUser($username, $email, $age, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (Username, Email, Age, Password) VALUES (:username, :email, :age, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        return $stmt->execute();
    }

   
    public function updateUser($id, $username, $email, $age) {
        $stmt = $this->conn->prepare("UPDATE users SET Username = :username, Email = :email, Age = :age WHERE Id = :id");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

  
    public function deleteUser($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE Id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>