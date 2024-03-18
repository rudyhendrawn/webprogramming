<?php

// Array multidimensi
$arraymulti = array
(
	"Wayan" => array
	(
		"tugas" => 80, 
		"uts" => 70,
		"uas" => 60,
		"hasil" => "LULUS"
	),
	"Made" => array
	(
		"tugas" => 80, 
		"uts" => 70,
		"uas" => 60,
		"hasil" => "LULUS"
	),
	"Nyoman" => array
	(
		"tugas" => 80, 
		"uts" => 70,
		"uas" => 60,
		"hasil" => "LULUS"
	)

	);

$arrraymulti2 = array
(
	"firstname" => "Budi",
	"lastname" => "Ari"
);

foreach($arrraymulti2 as $name) {
	echo $name."<br>";
}

foreach ($arraymulti as $nilai => $value) {
	foreach ($value as $values => $valud) {
		echo $nilai.' '.$values.' '.$valud."<br>";
	}
	echo "<br>";
}














?>