<?php
class Admin {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    
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

    public function getUsersWithTickets() {
        $stmt = $this->conn->prepare("
            SELECT users.Id, users.Username, users.Email, users.Age, 
                   tickets.ticket_type, tickets.quantity, tickets.total_price, tickets.payment_status
            FROM users
            LEFT JOIN tickets ON tickets.user_id = users.Id
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllQuestions() {
        $stmt = $this->conn->prepare("SELECT Id, emri, mbiemri, mosha, email, question FROM user");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addQuestion($name, $surname, $age, $email, $question) {
        $stmt = $this->conn->prepare("INSERT INTO user (emri, mbiemri, mosha, email, question) VALUES (:name, :surname, :age, :email, :question)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':question', $question);
        return $stmt->execute();
    }
    public function updateQuestion($id, $name, $surname, $age, $email, $question) {
        $stmt = $this->conn->prepare("UPDATE user SET emri = :name, mbiemri = :surname, mosha = :age, email = :email, question = :question 
                                      WHERE Id = :id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

?>