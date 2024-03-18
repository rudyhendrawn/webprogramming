<?php
/*
	 Fungsi pada PHP:
	 1. Fungsi  non-return value
	 	1.1 Fungsi non-return value tanpa argumen
	 	1.2 Fungsi non-return value dengan argumen
	 2. Fungsi return value
	 	2.1 Fungsi return value tanpa argumen
	 	2.2 Fungsi return value dengan argumen
*/

// 1.1 Fungsi non-return value tanpa argumen
function perkalian_1() {
	$var1 = 10;
	$var2 = 50;
	$var3 = $var1 * $var2;
	echo $var3;
}

// 1.2 Fungsi non-return value dengan argumen
function perkalian_2($arg1, $arg2) {
	// Kode fungsi
	$var = $arg1 * $arg2;
	echo $var;
}

// 2.1 Fungsi return value tanpa argumen
function penjumlahan_1() {
	$var1 = 10;
	$var2 = 50;
	$var3 = $var1 + $var2;

	return $var3;
}

function nilai_huruf($nilai) {
	// Mekanisme penentuan nilai huruf
	// ditulis di dalam fungsi ini
	if($nilai > 90)
		echo 'A';
	else if($nilai > 70)
		echo 'B';
	else if($nilai >= 50)
		echo 'C';
	else
		echo 'D';
}

// 2.2 Fungsi return value dengan argumen
function penjumlahan_2($arg1, $arg2) {
	$var3 = $arg1 - $arg2;

	return $var3;
}

$var1 = 100;
$var2 = 200;

echo "Hasil fungsi penjumlahan_2(): <br>";
echo penjumlahan_2($var1, $var2);
echo penjumlahan_2(penjumlahan_2($var1, $var2), $var2);
echo "<br>";
echo penjumlahan_2($var2, $var1);
echo "<br>";
echo penjumlahan_2($var1, penjumlahan_2($var2, $var1));
echo "<br>";
echo penjumlahan_2(penjumlahan_2($var1, $var2), $var2) + penjumlahan_2($var1, penjumlahan_2($var2, $var1));

// echo '<br>';
// echo '<h3>Nilai</h3><br>';
// $nilai = 30;

// Panggil fungsi nilai_huruf
// nilai_huruf($nilai);