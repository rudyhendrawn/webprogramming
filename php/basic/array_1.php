<?php
$nama = array('Wayan', 'Made', 'Nyoman');
$nilaiTugas = array(90, 70, 60);
$nilaiUTS = array(60, 50, 80);
$nilaiUAS = array(100, 50, 70);

function rataRata($tugas, $uts, $uas) {
	return ($tugas + $uts + $uas) / 3;
}

function nilai($rata2) {
	if($rata2 > 90) {
		return 'A';
	} else if($rata2 > 70) {
		return 'B';
	} else if($rata2 > 50) {
		return 'C';
	} else {
		return 'D';
	}
}


$i = 0;
foreach ($nama as $name) {
	echo $name.': '.
	round(rataRata($nilaiTugas[$i], $nilaiUTS[$i], $nilaiUAS[$i]), 1).
	' -> '.
	nilai(rataRata($nilaiTugas[$i], $nilaiUTS[$i], $nilaiUAS[$i])).
	'<br>';
	
	$i++;
}