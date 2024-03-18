<?php

// Array multidimensi
$dataMhs = array
(
	"Nama" => array("Adi", "Putra", "Putri", "Dewi"),
	"NIM" => array("111", "222", "333", "444"),
	"Kota" => array("Denpasar", "Tabanan", "Badung", "Gianyar")
);

// Tampilkan semua data berdasarkan nama, nim, dan kota
$index = 0;
do {
	foreach ($dataMhs as $key => $value) 
	{
		echo "$key: $value[$index]<br>";
	}

	$index++;
}
while($index < 4);