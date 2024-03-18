<?php

// Struktur Pengambilan Keputusan pada PHP

// If-else
echo "<h3>Struktur if-else</h3>";
$num = 10;
if ($num % 2 == 0) {
    echo $num, " adalah Bilangan Genap";
} else {
    echo $num, " adalah Bilangan Ganjil";
}

echo "<br><br>";
// Struktur If-else-if
echo "<h3>Struktur if-else-if</h3>";
$num = -10;
if ($num > 0) {
    echo $num, " adalah Bilangan Positif";
} else if ($num < 0) {
    echo $num, " adalah Bilangan Negatif";
} else {
    echo "adalah ", $num;
}

echo "<br><br>";
// Struktur Switch-case
echo "<h3>Struktur switch-case</h3>";
$bulan = 1;
switch ($bulan) {
    case 1:
        echo "Bulan ke-", $bulan, " adalah Januari";
        break;
    case 2:
        echo "Bulan ke-", $bulan, " adalah Februari";
        break;
    case 3:
        echo "Bulan ke-", $bulan, " adalah Maret";
        break;
    default:
        echo "Tidak ada nomor bulan tersebut";
        break;
}