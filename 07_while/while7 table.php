<?php
$jumlahBaris = 10;
$jumlahkolom = 6;
echo "<table border='1'>";
$baris = 1;
while ($baris <= $jumlahBaris) {
    echo "<tr>";
    $kolom = 1;
    while ($kolom <= $jumlahkolom) {
        echo "<td> Kolom ke ".$kolom, "Baris ke .$baris </td>";
        $kolom++;
    }
    echo "</tr>";
    $baris++;
}
echo "</table>";
?>