<?php
if (isset($_POST['submit'])) {
    $JumlahUang = (int)$_POST['jumlah_uang'];
    $Sisa = $JumlahUang;

    $sa = floor($Sisa / 100000);
    $Sisa = $Sisa % 100000; 

    $sb = floor($Sisa / 50000);
    $Sisa = $Sisa % 50000;

    $sc = floor($Sisa / 20000);
    $Sisa = $Sisa % 20000;

    $sd = floor($Sisa / 5000);
    $Sisa = $Sisa % 5000;


    $se = floor($Sisa / 100);
    $Sisa = $Sisa % 100;

    $sf = floor($Sisa / 50);
    $Sisa = $Sisa % 50;
    
    $jumlahUang_format = number_format($JumlahUang, 0, ',', '.');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Penentuan Jumlah Pecahan</h1>
    <p>Jumlah uang yang diminta: Rp. <?php echo $jumlahUang_format; ?></p>
    <hr>
    
    <h2>Rincian Pecahan:</h2>
    <?php
    echo "Jumlah Rp 100.000: ".$sa." lembar/keping <br>";
    echo "Jumlah Rp 50.000: ".$sb." lembar/keping <br>";
    echo "Jumlah Rp 20.000: ".$sc." lembar/keping <br>";
    echo "Jumlah Rp 5.000: ".$sd." lembar/keping <br>";
    echo "Jumlah Rp 100: ".$se."lembar/keping <br>";
    echo "Jumlah Rp 50: ".$sf." lembar/keping <br>";
    ?>
</body>
</html>

<?php
} 
?>