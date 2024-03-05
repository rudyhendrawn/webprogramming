<?php
// Decoding JSON to a PHP Object
$jsonString = '{"name": "John Doe", "age": 30, "city": "New York"}';
$phpObject = json_decode($jsonString);

echo $phpObject->name; // Outputs: John Doe
echo $phpObject->age; // Outputs: 30
echo $phpObject->city; // Outputs: New York


// Decoding JSON to a PHP Array
$jsonString = '{"name": "Jane Doe", "age": 25, "city": "Los Angeles"}';
$phpArray = json_decode($jsonString, true);

echo $phpArray['name']; // Outputs: Jane Doe
echo $phpArray['age']; // Outputs: 25
echo $phpArray['city']; // Outputs: Los Angeles


// Encoding a PHP Array to JSON
$phpArray = [
    "name" => "Mike Johnson",
    "age" => 35,
    "city" => "Chicago"
];
$jsonString = json_encode($phpArray);

echo $jsonString; // Outputs: {"name":"Mike Johnson","age":35,"city":"Chicago"}


// Decoding JSON from a File to a PHP Object
$jsonString = file_get_contents('data.json');
$phpObject = json_decode($jsonString);

echo $phpObject[0]->nama; // Outputs: Wayan
echo $phpObject[0]->tugas; // Outputs: 90
echo $phpObject[0]->uts; // Outputs: 70
echo $phpObject[0]->uas; // Outputs: 60