<?php
include 'FormHandler.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formHandler = new FormHandler($pdo, $_POST['name'], $_POST['email']);
    $formHandler->saveData();
    $formHandler->displayData();
    echo '<br><a href="index.html">Kembali';
} else {
    header("Location: index.html");
    exit;
}