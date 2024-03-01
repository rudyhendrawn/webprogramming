<?php
session_start();

// Example of setting a session variable
if (!isset($_SESSION['visit_count'])) 
{
    $_SESSION['visit_count'] = 1;
} 
else 
{
    $_SESSION['visit_count']++;
}

// Setting a cookie
$cookie_name = "user";
$cookie_value = "Wayan Kaler";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Accessing a cookie
if(isset($_COOKIE[$cookie_name])) 
{
    echo "Welcome " . $_COOKIE[$cookie_name];
} 
else 
{
    echo "Welcome Guest!";
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


<!-- Display session data -->
<p>Visit count: <?php echo $_SESSION['visit_count']; ?></p>

</body>
</html>
