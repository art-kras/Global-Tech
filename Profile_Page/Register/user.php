<?php
require_once 'db.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function register($id, $name, $lastName, $username, $email, $password, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $pdo = $this->db->getConnection();
        $stmt = $pdo->prepare("INSERT INTO users (id, name, lastName, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)");

        try {
            $stmt->execute([$id, $name, $lastName, $username, $email, $hashedPassword, $role]);
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage(); // Return the error message
        }
    }
}
?>
