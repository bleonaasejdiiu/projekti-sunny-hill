<?php
class Login {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Metoda për autentifikimin e përdoruesit
    public function authenticate($email, $password) {
        // Merr përdoruesin nga databaza
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE Email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Nëse përdoruesi ekziston dhe fjalëkalimi është i saktë
        if ($row && password_verify($password, $row['Password'])) {
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['id'] = $row['Id'];
            return true;
        }
        return false;
    }
}
?>
