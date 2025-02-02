<?php
class UserSearch {
    private $conn;

    
    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    public function saveSearch($user_ip, $artist_name) {
        
        $query = "INSERT INTO user_searches (user_ip, artist_name) VALUES (:user_ip, :artist_name)";
        $stmt = $this->conn->prepare($query);
        
        
        $stmt->bindParam(':user_ip', $user_ip);
        $stmt->bindParam(':artist_name', $artist_name);
        
       
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>