<!DOCTYPE html>
<html>
<head>
    <title>Input Gaji Karyawan Berdasarkan Golongan</title>
</head>
<body>
    <h2>Input Gaji Karyawan Berdasarkan Golongan</h2>
<?php

$jam_kerja = (int)$_POST['jam_kerja']; 
$golongan = $_POST['golongan'];


$upah_normal_per_jam = 0;
$upah_lembur_per_jam = 3000;
$batas_jam_normal = 48;
$total_upah = 0;
$upah_lembur = 0;
$upah_normal = 0;
$jam_lembur = 0;


switch ($golongan) {
    case 'A':
        $upah_normal_per_jam = 4000;
        break;
    case 'B':
        $upah_normal_per_jam = 5000;
        break;
    case 'C':
        $upah_normal_per_jam = 6000;
        break;
    case 'D':
        $upah_normal_per_jam = 7500;
        break;
}

if ($jam_kerja > $batas_jam_normal) {

    $upah_normal = $batas_jam_normal * $upah_normal_per_jam; 

    $jam_lembur = $jam_kerja - $batas_jam_normal;
    
    $upah_lembur = $jam_lembur * $upah_lembur_per_jam;
    

    $total_upah = $upah_normal + $upah_lembur;
    
} else {
    $upah_normal = $jam_kerja * $upah_normal_per_jam;
    $total_upah = $upah_normal;
}
echo "<h2>Hasil Perhitungan Gaji Karyawan</h2>";
echo "Golongan Karyawan: $golongan <br>";
echo "Upah Normal per Jam:". number_format($upah_normal_per_jam, 0, ',', '.')." <br>";

echo "Total Jam Kerja: $jam_kerja jam <br>";
echo "<br>";

echo "<h3>Rincian Upah</h3>";
echo "Jam Normal (maks. $batas_jam_normal jam) : " . number_format($upah_normal, 0, ',', '.') . "<br>";
echo "Jam Lembur ($jam_lembur jam) : " . number_format($upah_lembur, 0, ',', '.') . "<br>";
echo "<br>";
echo "<h3>Total Upah yang Diterima: " . number_format($total_upah, 0, ',', '.') . "</h3>";
?>
</body>
</html>