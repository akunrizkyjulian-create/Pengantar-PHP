<?php
$jumlah_solusi = 0;

echo "Pasangan Nilai x, y, dan z yang Memenuhi Persamaan x + y + z = 25:\n" ,"<br>";



$x = 1;
while ($x <= 23) {
    $y = 1;
    $max_y = 25 - $x - 1;
    while ($y <= $max_y) {

        $z = 1;
        $max_z = 25 - $x - $y;


        if ($x + $y + $max_z == 25) {
            $z = $max_z; 
            echo "x = $x, y = $y, z = $z\n","<br>";
            $jumlah_solusi++;
        }
        

        $y++;
    }
    $x++;
}

echo "Jumlah penyelesaian: $jumlah_solusi\n";
?>