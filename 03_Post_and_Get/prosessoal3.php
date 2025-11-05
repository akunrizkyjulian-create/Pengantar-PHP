<?php

function getData($name) {
    return isset($_POST[$name]) ? htmlspecialchars($_POST[$name]) : 'XXX';
}

$nama_lengkap = getData('nama_lengkap');
$tempat_lahir = getData('tempat_lahir');
$tgl = getData('tgl');
$bln = getData('bln');
$thn = getData('thn');
$alamat = getData('alamat');
$jenis_kelamin = getData('jenis_kelamin');
$asal_sekolah = getData('asal_sekolah');
$nilai_uan = getData('nilai_uan');

$tanggal_lahir_formatted = $tgl . '-' . $bln . '-' . $thn;

$nama_bulan_arr = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$bulan_nama = is_numeric($bln) && $bln >= 1 && $bln <= 12 ? $nama_bulan_arr[(int)$bln] : 'BLN';
$tanggal_lahir_output = "{$tgl}-{$bulan_nama}-{$thn}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Pendaftaran</title>
    <style>
        .output-table { margin-top: 20px; font-family: monospace; }
        .output-table td { padding: 5px 10px; }
        .label { font-weight: bold; width: 150px; }
    </style>
</head>
<body>
    <h2>Terimakasih <?php echo $nama_lengkap; ?>sudah mengisi form pendaftaran.</h2>
    
    <table class="output-table">
        <tr>
            <td class="label">Nama Lengkap</td>
            <td>: <?php echo $nama_lengkap; ?></td>
        </tr>
        <tr>
            <td class="label">Tempat Lahir</td>
            <td>: <?php echo $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir</td>
            <td>: <?php echo $tanggal_lahir_output; ?></td>
        </tr>
        <tr>
            <td class="label">Alamat Rumah</td>
            <td>: <?php echo nl2br($alamat); ?></td>
        </tr>
        <tr>
            <td class="label">Jenis Kelamin</td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td class="label">Asal Sekolah</td>
            <td>: <?php echo $asal_sekolah; ?></td>
        </tr>
        <tr>
            <td class="label">Nilai UAN</td>
            <td>: <?php echo $nilai_uan; ?></td>
        </tr>
    </table>
    <br>
</body>
</html>