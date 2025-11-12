<!DOCTYPE html>
<html>
<head>
    <title>Membaca Bulan saat ini dengan jumlah hari</title>
</head>
<body>
    <h2>Membaca Bulan saat ini dengan jumlah hari</h2>
<?php
$angkaBln = date("n"); 
$tahun_saat_ini = date("Y");

$namaBln = "";
$jumlah_hari = 0;

switch($angkaBln){
    
    case 1 : 
    case 3 : 
    case 5 : 
    case 7 : 
    case 8 : 
    case 10 : 
    case 12 : 
        if ($angkaBln == 1) $namaBln = "Januari";
        else if ($angkaBln == 3) $namaBln = "Maret";
        else if ($angkaBln == 5) $namaBln = "Mei";
        else if ($angkaBln == 7) $namaBln = "Juli";
        else if ($angkaBln == 8) $namaBln = "Agustus";
        else if ($angkaBln == 10) $namaBln = "Oktober";
        else if ($angkaBln == 12) $namaBln = "Desember";
        
        $jumlah_hari = 31;
        break;

    case 2 : 
        $namaBln = "Februari";

        if (($tahun_saat_ini % 4 == 0 && $tahun_saat_ini % 100 != 0) || ($tahun_saat_ini % 400 == 0)) {
            $jumlah_hari = 29; 
        } else {
            $jumlah_hari = 28; 
        }
        break;

    case 4 : 
    case 6 : 
    case 9 : 
    case 11 : 
        if ($angkaBln == 4) $namaBln = "April";
        else if ($angkaBln == 6) $namaBln = "Juni";
        else if ($angkaBln == 9) $namaBln = "September";
        else if ($angkaBln == 11) $namaBln = "November";

        $jumlah_hari = 30;
        break;
}

echo "<h1>Informasi Bulan Saat Ini</h1>";
echo "Nama Bulan sekarang adalah : " . $namaBln . " <br>";
echo "Tahun sekarang adalah : " . $tahun_saat_ini . " <br>";
echo "Jumlah hari di bulan " . $namaBln . " adalah " . $jumlah_hari . " hari.";

?>
</body>
</html>