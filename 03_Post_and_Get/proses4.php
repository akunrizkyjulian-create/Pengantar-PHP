<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];    
$jumlah = $bilangan1 + $bilangan2
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Reques Post</title>
</head>
<body>
    <h1>Input dua bilangan</h1>
    <?php
    echo "<p>Anda telah memasukan bilangan pertama = ".$bilangan1."</p","<br>";
    echo "<p>Anda telah memasukan bilangan kedua = ".$bilangan2."</p","br>";
    echo "<p>Hasil Penjumlahan adalah = ".$jumlah."</p";

    ?>
</body>
</html>