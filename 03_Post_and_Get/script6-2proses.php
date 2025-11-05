<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
    $nilaiJual = $_POST['penjualan']; 
    $prosenKomisi = $_POST['komisi'];

    $komisi = $nilaiJual * $prosenKomisi / 100; 

    // Menampilkan hasil perhitungan
    echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>"; 
    echo "<p>Prosentase Komisi : ".$prosenKomisi." %</p>"; 
    echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi."</p>"; 
    ?>
</body>
</html>