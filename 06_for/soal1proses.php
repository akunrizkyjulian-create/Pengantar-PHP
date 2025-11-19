<?php
$saldo_awal = $_POST['saldo'];
$n_bulan = $_POST['bulan'];

$biaya_admin = 9000;
$bunga_rendah = 0.03 / 12; 
$bunga_tinggi = 0.04 / 12; 

$saldo = $saldo_awal;

echo "<h3>Perhitungan Saldo Tabungan Selama $n_bulan Bulan</h3>";
echo "Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "<br><br>";

for ($i = 1; $i <= $n_bulan; $i++) {
    if ($saldo < 1100000) { 
        $tingkat_bunga = $bunga_rendah; 
    } else { 
        $tingkat_bunga = $bunga_tinggi; 
    }
    
    $bunga_didapat = $saldo * $tingkat_bunga;
    
    // Saldo Akhir Bulan
    $saldo = $saldo + $bunga_didapat - $biaya_admin; 
}

echo "<hr>";
echo "<h4>Saldo Akhir Setelah $n_bulan Bulan: Rp " . number_format($saldo, 0, ',', '.') . "</h4>";

?>