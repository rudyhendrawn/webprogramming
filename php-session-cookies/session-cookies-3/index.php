<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
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
<?php include_once 'view_items.php'; ?>

</body>
</html>
