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