<?php
class Register {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Metoda për të verifikuar nëse email-i ekziston në databazë
    public function verifyEmail($email) {
        $stmt = $this->conn->prepare("SELECT Email FROM users WHERE Email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0; // Kthejmë true nëse ekziston
    }

    // Metoda për të regjistruar përdoruesin dhe për të ruajtur fjalëkalimin e hashuar
    public function registerUser($username, $email, $age, $password) {
        // Hashimi i fjalëkalimit
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Përgatitja e query për regjistrim
        $stmt = $this->conn->prepare("INSERT INTO users (username, email, age, password) VALUES (:username, :email, :age, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', $hashedPassword);

        return $stmt->execute(); // Ekzekutojmë query-n
    }
}
?>