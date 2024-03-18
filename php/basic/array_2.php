<?php
// Buat fungsi untuk menghitung nilai rata-rata tugas, uts, dan uas
function average($tugas, $uts, $uas) {
	$avg = ($tugas + $uts + $uas)/3;
	return $avg;

}

/*
Buat fungsi untuk menghitung nilai huruf (A, B, C, D) berdasarkan nilai rata-rata dengan kriteria:
	1. rata-rata > 90 maka A
	2. rata-rata > 70 maka B
	3. rata-rata > 50 maka C
	4. rata-rata <= 50 maka D
*/

function score($avrg) {
	if($avrg > 90)
		return 'A';
	elseif($avrg > 70)
		return 'B';
	elseif($avrg > 50)
		return 'C';
	else
		return 'D';
}

// Tampilkan nilai rata-rata dan nilai huruf untuk setiap nama 
// Array multidimensi
$dataMhs = array
(
	'Nama' => array('Adi', 'Putra', 'Putri', 'Dewi'),
	'NIM' => array('111', '222', '333', '444'),
	'Kota' => array('Denpasar', 'Tabanan', 'Badung', 'Gianyar'),
	'tugas' => array(50, 70, 80, 80),
	'uts' => array(90, 70, 60, 50),
	'uas' => array(70, 80, 60, 70),
);

$index = 0;
do {
	foreach ($dataMhs as $key => $value) {
		echo "$key: $value[$index]<br>";
	}
	$index++;
}
while($index < 4);

$index = 0;
do {
	$ratarata = average($dataMhs['tugas'][$index], $dataMhs['uts'][$index], $dataMhs['uas'][$index]);
	$nilai = score($ratarata);
	echo $dataMhs['Nama'][$index].' '.$ratarata.' '.$nilai.'<br>';

	$index++;
}
while($index < 4);