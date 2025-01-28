<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "projekti-web";
    private $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Failed to connect database: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}

$db = new Database();
$conn = $db->connect();
?>