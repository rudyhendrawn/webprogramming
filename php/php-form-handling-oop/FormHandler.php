<?php
class FormHandler {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = htmlspecialchars($name);
        $this->email = htmlspecialchars($email);
    }

    public function displayData() {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}