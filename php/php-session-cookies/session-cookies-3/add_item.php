<?php
require_once 'Item.php';

// Create welcome message for logged in user
$welcome_message = "Welcome " . $_COOKIE['username'] . "!";
echo "<h2>$welcome_message</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_add'])) {
    $add_item = new Item($pdo);
    $item_name = $_POST['name'] ?? '';
    if (!empty($item_name)) {
        $add_item->addItem($item_name);
    }
}