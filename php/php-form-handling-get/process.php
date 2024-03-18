<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);

    // Process and save the form data
    // For example, display the data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    // In a real application, you might save this data to a database
} else {
    // Redirect back to the form if the page is accessed directly
    header("Location: index.html");
    exit;
}