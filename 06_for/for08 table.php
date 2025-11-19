<?php
$jumlahBaris = 10;
$jumlahkorom = 6;
echo "<table border='1'>";
for ($baris = 1; $baris <= $jumlahBaris; $baris++) 
{
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumlahkorom; $kolom++) 
    {
        echo "<td>Baris ".$baris." Kolom ".$kolom."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>