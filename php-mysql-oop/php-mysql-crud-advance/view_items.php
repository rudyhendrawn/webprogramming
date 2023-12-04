<?php
require_once 'Item.php';

$view_item = new Item($pdo);
$items = $view_item->getAllItems();

echo "<h2>Items List</h2>";
echo "<ul>";
foreach ($items as $view_item) 
{
    echo "<li>" . htmlspecialchars($view_item['name']) . "</li>";
}
echo "</ul>";