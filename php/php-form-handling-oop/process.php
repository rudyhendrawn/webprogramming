<?php
include 'FormHandler.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $formHandler = new FormHandler($_POST['name'], $_POST['email']);
    $formHandler->displayData();
}
else 
{
    header("Location: form.html");
    exit;
}