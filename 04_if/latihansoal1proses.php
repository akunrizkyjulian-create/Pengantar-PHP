<!DOCTYPE html>
<html>
<head>
    <title>Mengecek Apakah Tahun yang diinput merupakan Tahun Kabisat</title>
</head>
<body>
    <h2>Mengecek Apakah Tahun yang diinput merupakan Tahun Kabisat</h2>

    <?php
    $tahun = $_POST['tahun'];

    echo "<h2>Hasil Pengecekan Tahun Kabisat</h2>";
    echo "<p>Tahun yang dimasukkan: <b>$tahun</b></p>";

    // Logika Tahun Kabisat
    // Tahun kabisat harus memenuhi salah satu dari dua kondisi:
    // 1. Habis dibagi 400 (contoh: 2000, 2400)
    // ATAU
    // 2. Habis dibagi 4 TETAPI tidak habis dibagi 100 (contoh: 2024, 2028, tapi bukan 1900, 2100)
    if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0))) {
        echo "<p> ".$tahun." adalah Tahun kabisat </p>";
    }
    else {
        echo "<p> ".$tahun." Tahun tersebut tidak merupakan tahun kabisat </p>";
    }
    ?>  

</body>
</html>