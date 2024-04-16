<?php
require_once 'dbconfig.php';

class Item {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllItems() {
        $stmt = $this->pdo->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getItem($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM items WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addItem($name) {
        $stmt = $this->pdo->prepare("INSERT INTO items (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
    }

    // Add methods for update and delete as needed
    public function updateItem($id, $name) {
        $stmt = $this->pdo->prepare("UPDATE items SET name = :name WHERE id = :id");
        $stmt->execute(['id' => $id, 'name' => $name]);
    }

    public function deleteItem($id) {
        $stmt = $this->pdo->prepare("DELETE FROM items WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}