<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Online Mahasiswa Baru</h1>
    <form method="post" action="prosessoal3.php">
        
        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>
        
        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>
        
        <label>Tanggal Lahir:</label><br>
        <select name="tgl" required>
            <option value="">-- Tanggal --</option>
            <?php for($i=1; $i<=31; $i++) echo "<option value='$i'>$i</option>"; ?>
        </select>
        <select name="bln" required>
            <option value="">-- Bulan --</option>
            <?php
            $nama_bulan = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            for($i=1; $i<=12; $i++) echo "<option value='$i'>$nama_bulan[$i]</option>"; 
            ?>
        </select>
        <select name="thn" required>
            <option value="">-- Tahun --</option>
            <?php for($i=2005; $i>=1980; $i--) echo "<option value='$i'>$i</option>"; ?>
        </select><br><br>

        <label for="alamat">Alamat Rumah:</label><br>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>
        
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="pria" name="jenis_kelamin" value="Pria" required>
        <label for="pria">Pria</label>
        <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">
        <label for="wanita">Wanita</label><br><br>
        
        <label for="asal_sekolah">Asal Sekolah:</label><br>
        <input type="text" id="asal_sekolah" name="asal_sekolah" required><br><br>
        
        <label for="nilai_uan">Nilai UAN:</label><br>
        <input type="text" id="nilai_uan" name="nilai_uan" required><br><br>

        <input type="submit" name="submit" value="Daftar Sekarang">
        <input type="reset" value="Reset Form">
    </form>
</body>
</html>