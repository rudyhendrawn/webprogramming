<!DOCTYPE html>
<html>
<head>
    <title>Items Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Add Item</h2>
<form method="post">
    <input type="text" name="name" placeholder="Item name">
    <input type="submit" name="submit_add" value="Add">
</form>

<?php include_once 'add_item.php'; ?>

<h2>Item List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php 
    include_once 'view_items.php'; 
    $items = view_items($pdo);
    foreach ($items as $item) {
        echo "<tr>";
        echo "<td>" . $item['id'] . "</td>";
        echo "<td>" . $item['name'] . "</td>";
        echo "<td>";
        // echo "Edit | Delete";
        // echo "<div style='display: inline;'>";
        echo "<a href='update_item.php?id=" . $item['id'] . "'>Update</a>";
        echo "<a href='delete_item.php?id=" . $item['id'] . "'>Delete</a>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>



</body>
</html>
