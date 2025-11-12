<!DOCTYPE html>
<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

    <?php
    $Bilangan1 = $_POST['bil1']; //Membaca inputan bilangan pertama
    $Bilangan2 = $_POST['bil2']; //Membaca inputan bilangan kedua
    $Bilangan3 = $_POST['bil3'];     //Membaca inputan bilangan ketiga

    //cara ke -1
    //Melakuakn perbandingan nilai terbesar dari  bil1  atau bil 2  lalu disimpan dalam variabel max
    //setelah itu max melakukan perbandingan apakah lebih besar dari bil 3 jika iya itu nilai terbesar jika tidak maka nilai terbesar terletak di bil3
    if ($Bilangan1 > $Bilangan2){
        $maxsementara = $Bilangan1;
    }
    else {
        $maxsementara = $Bilangan2;
    }

    if ($Bilangan3 > $maxsementara) {
        $maxakhir = $Bilangan3;
    }
    else {
        $maxakhir = $maxsementara;
    }
    echo "<p>Nilai Maksimum dari  ".$Bilangan1.", ".$Bilangan2.",".$Bilangan3." adalah: ".$maxakhir." </p>";

    // cara ke 2
    // idenya adalah langsung membandingkan masing-masing bilangan dengan bilangan yang lain.
    // misal: jika bil1> bil2 dan bil1 > bil3 maka bilangan max adalalah bil 1.

    if (($Bilangan1> $Bilangan2) && ($Bilangan1 > $Bilangan3)) {
        $maxakhir = $Bilangan1;
    }
    else 
        if (($Bilangan2> $Bilangan1) && ($Bilangan2 > $Bilangan3)) {
            $maxakhir = $Bilangan2;
        }
        else 
            if (($Bilangan3> $Bilangan1) && ($Bilangan3 > $Bilangan2)){
            $maxakhir = $Bilangan3;
        }
    
    echo "<p>Nilai Maksimum dari  ".$Bilangan1.", ".$Bilangan2.",".$Bilangan3." adalah: ".$maxakhir." </p>";
    
    //cara ke - 3
    // idenya hampir sama dengan cara ke -1, tetapi tidak mencari max sementara
    if ($Bilangan1 > $Bilangan2) {
        if ($Bilangan1 > $Bilangan3)
            $maxakhir = $Bilangan1;

        else 
            $maxakhir = $Bilangan3;
    }
    else {
        if ($Bilangan2 > $Bilangan1)
            $maxakhir = $Bilangan2;

        else
            $maxakhir = $Bilangan3;
    }
    echo "<p>Nilai Maksimum dari  ".$Bilangan1.", ".$Bilangan2.",".$Bilangan3." adalah: ".$maxakhir." </p>";
    ?>  

</body>
</html>