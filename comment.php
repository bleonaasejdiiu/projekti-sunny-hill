<?php
class Comment {
    private $conn;
    private $table_name = "comments"; 

    public function __construct($db) {
        $this->conn = $db;
    }

    // per me rujt nje koment
    public function saveComment($comment, $page_name) {
        $query = "INSERT INTO " . $this->table_name . " (comment, page_name) VALUES (:comment, :page_name)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':page_name', $page_name);

        return $stmt->execute();
    }
        // per mi marr komentet
        public function getComments($page_name) {
            $query = "SELECT * FROM " . $this->table_name . " WHERE page_name = :page_name ORDER BY created_at DESC";
            
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':page_name', $page_name);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    ?>