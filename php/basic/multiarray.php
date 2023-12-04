<?php	
// Deklarasi multidimentional array
$dataNilai = array(
			"Wayan" => array(	"Tugas" => 90,
								"UTS" => 60,
								"UAS" => 100),
			"Made" => array(	"Tugas" => 70,
								"UTS" => 50,
								"UAS" => 50),
						
			"Nyoman" => array(	"Tugas" => 60,
								"UTS" => 80,
								"UAS" => 70)
					);														
// Akses
echo $dataNilai["Wayan"]["Tugas"]."<br>";
echo $dataNilai["Wayan"]["UTS"]."<br>";
echo $dataNilai["Wayan"]["UAS"]."<br>";

echo json_encode($dataNilai);