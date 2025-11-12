<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Karyawan Honorer</title>
</head>
<body>
    <h2>Perhitungan Gaji Karyawan Honorer</h2>
<?php
$jam_kerja = $_POST['jam_kerja'];

$upah_normal_per_jam = 2000;
$upah_lembur_per_jam = 3000;
$batas_jam_normal = 48;

$total_upah = 0;
$jam_lembur = 0;

if ($jam_kerja > $batas_jam_normal) {

    $upah_normal = $batas_jam_normal * $upah_normal_per_jam; 
    
    $jam_lembur = $jam_kerja - $batas_jam_normal;
    

    $upah_lembur = $jam_lembur * $upah_lembur_per_jam;

    $total_upah = $upah_normal + $upah_lembur;
    
    echo "<h2>Rincian Gaji</h2>";
    echo "Jumlah Jam Kerja: $jam_kerja jam <br>";
    echo "Jam Normal ($batas_jam_normal jam): Rp " . number_format($upah_normal, 0, ',', '.') . "<br>";
    echo "Jam Lembur ($jam_lembur jam): Rp " . number_format($upah_lembur, 0, ',', '.') . "<br>";
    
} else {

    $total_upah = $jam_kerja * $upah_normal_per_jam;
    
    echo "<h2>Rincian Gaji</h2>";
    echo "Jumlah Jam Kerja: $jam_kerja jam <br>";
    echo "Jam Kerja Normal: Rp " . number_format($total_upah, 0, ',', '.') . "<br>";
}
echo "<p> Total Upah yang Diterima: Rp" . number_format($total_upah, 0, ',', '.') . "</p>";

?>
</body>
</html>