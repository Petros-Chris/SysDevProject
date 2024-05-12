<?php

namespace app\models;

use app\core\Model;
use PDO;

class Post extends Model
{
    public function getAllPosts()
    {
        $stmt = $this->db->query("SELECT * FROM post");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createPost($message, $passwordHash)
    {
        $stmt = $this->db->prepare("INSERT INTO post (message, password_hash) VALUES (:message, :password_hash)");
        $stmt->execute(['message' => $message, 'password_hash' => $passwordHash]);
        return $this->db->lastInsertId();
    }

    public function getPostById($postId)
    {
        $stmt = $this->db->prepare("SELECT * FROM post WHERE post_id = :post_id");
        $stmt->execute(['post_id' => $postId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePost($postId, $message, $passwordHash)
    {
        $stmt = $this->db->prepare("UPDATE post SET message = :message, password_hash = :password_hash WHERE post_id = :post_id");
        $stmt->execute(['message' => $message, 'password_hash' => $passwordHash, 'post_id' => $postId]);
    }

    public function deletePost($postId)
    {
        $stmt = $this->db->prepare("DELETE FROM post WHERE post_id = :post_id");
        $stmt->execute(['post_id' => $postId]);
    }
}
