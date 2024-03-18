<?php

echo "<h2>Struktur Pengulangan pada PHP</h2>";

// Struktur for
echo "<h3>Struktur For</h2>";
for ($i=1; $i<=10; $i++) {
    echo $i, " ";
}

// Struktur while-do
echo "<h3>Struktur while-do</h2>";
$i = 1;
while ($i <= 10) {
    echo $i, " ";
    $i++;
}

// Struktur do-while
echo "<h3>Struktur do-while</h2>";
$i = 1;
do {
    echo $i, " ";
    $i++;
}
while ($i <= 10);