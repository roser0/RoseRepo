<?php
class Comment {
    private $conn;
    private $table = "comments";

    public $id;
    public $article_id;
    public $user_id;
    public $content;
    public $approved;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (article_id, user_id, content) VALUES (:article_id, :user_id, :content)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':article_id', $this->article_id);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':content', $this->content);
        return $stmt->execute();
    }

    public function approve() {
        $query = "UPDATE " . $this->table . " SET approved = 1 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
?>
