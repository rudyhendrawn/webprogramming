<?php
include 'dbconnect.php';

class UserHandler {
    private $name;
    private $email;
    private $pdo;

    public function __construct($pdo, $name, $email) {
        $this->pdo = $pdo;
        $this->name = htmlspecialchars($name);
        $this->email = htmlspecialchars($email);
    }

    public function insertUser() {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute(['name' => $this->name, 'email' => $this->email]);
    }

    public function viewUser() {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}