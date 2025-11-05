<?php
if (isset($_POST['submit'])) {
    $saldoAwal = $_POST['saldo_awal'];
    $bungaPersen = $_POST['bunga_persen'];
    $bulan = $_POST['bulan'];

    $bungaDesimal = $bungaPersen / 100;
    $totalBunga = $saldoAwal * $bungaDesimal * $bulan;

    $saldoAkhir = $saldoAwal + $totalBunga;
    
    $saldoAwal_format = number_format($saldoAwal, 0, ',', '.');
    $saldoAkhir_format = number_format($saldoAkhir, 0, ',', '.');

    // Tampilkan hasil
    echo "<h2>Hasil Perhitungan Saldo Tabungan</h2>";
    echo "<p>Saldo Awal: Rp. " . $saldoAwal_format . "</p>";
    echo "<p>Bunga Per Bulan: " . $bungaPersen . "%</p>";
    echo "<p>Lama Menabung: " . $bulan . " bulan</p>";
    echo "<hr>";
    echo "<h3>Saldo Akhir setelah " . $bulan . " bulan adalah: Rp. " . $saldoAkhir_format . "</h3>";
} 
?>