<?php
include 'Item.php';

$item = new Item($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $itemName = $_POST['name'] ?? '';
    if (!empty($itemName)) 
	{
        $item->addItem($itemName);
    }
}

$items = $item->getAllItems();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Add Item</h2>
<form method="post">
    <input type="text" name="name" placeholder="Item name">
    <input type="submit" value="Add">
</form>

<h2>Items List</h2>
<ul>
    <?php foreach ($items as $item): ?>
        <li><?php echo htmlspecialchars($item['name']); ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>