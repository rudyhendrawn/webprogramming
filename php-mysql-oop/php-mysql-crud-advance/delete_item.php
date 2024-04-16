<?php
require_once 'Item.php';

$item = new Item($pdo);
$item->deleteItem($_GET['id']);
header('Location: index.php');