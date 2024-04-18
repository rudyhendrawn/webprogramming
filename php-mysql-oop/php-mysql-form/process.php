<?php
include 'FormHandler.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formHandler = new UserHandler($pdo, $_POST['name'], $_POST['email']);
    $formHandler->insertUser();
    $formHandler->viewUser();
    echo '<br><a href="index.html">Kembali';
} else {
    header("Location: index.html");
    exit;
}