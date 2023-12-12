<?php
require_once 'Item.php';

$view_item = new Item($pdo);
$items = $view_item->getAllItems();

$_SESSION['viewCount'] += count($items); // Increment view count

echo "<h2>Items List</h2>";
echo "<ul>";
foreach ($items as $view_item) 
{
    echo "<li>" . htmlspecialchars($view_item['name']) . "</li>";
}
echo "</ul>";
echo "<p>You have viewed " . $_SESSION['viewCount'] . " items in this session.</p>";