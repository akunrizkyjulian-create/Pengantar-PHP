<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Saldo Tabungan</title>
</head>
<body>
    <h2>Kalkulator Saldo Tabungan Bank X</h2>
    <form action="prosessoal1.php" method="POST">
        <label for="saldo_awal">Saldo Awal (Rp):</label><br>
        <input type="number" id="saldo_awal" name="saldo_awal" required><br><br>
        
        <label for="bunga_persen">Bunga Per Bulan (%):</label><br>
        <input type="number" step="0.01" id="bunga_persen" name="bunga_persen" required><br><br>
        
        <label for="bulan">Lama Menabung (Bulan):</label><br>
        <input type="number" id="bulan" name="bulan" required><br><br>
        
        <input type="submit" value="Hitung Saldo Akhir" name="submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>