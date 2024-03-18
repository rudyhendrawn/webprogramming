<?php
require_once 'Item.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_add'])) {
    $item = new Item($pdo);
    $itemName = $_POST['name'] ?? '';
    if (!empty($itemName)) {
        $item->addItem($itemName);
        setcookie("lastItemAdded", $itemName, time() + 3600); // 1 hour expiration
    }
}