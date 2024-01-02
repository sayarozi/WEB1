<?php

// Deklarasi variabel
$hariIni = new DateTime();

// Tanggal 500 hari yang lalu
$tanggalLampau = $hariIni->sub(new DateInterval('P500D'));

// Perulangan untuk 500 hari lampau
for ($i = 0; $i < 500; $i++) {
    $tanggalMasaLampau = $tanggalLampau->add(new DateInterval('P1D'));
    $hari = $tanggalMasaLampau->format('l');
    $tanggal = $tanggalMasaLampau->format('d');
    $bulan = $tanggalMasaLampau->format('m');
    $tahun = $tanggalMasaLampau->format('Y');

    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>Masa Lampau</td>";
    echo "<td>" . $hari . "</td>";
    echo "<td>" . $tanggal . "</td>";
    echo "<td>" . $bulan . "</td>";
    echo "<td>" . $tahun . "</td>";
    echo "</tr>";
}

// Perulangan untuk 1000 hari ke depan
$tanggalMasaDepan = $hariIni;
for ($i = 0; $i < 1000; $i++) {
    $tanggalMasaDepan = $tanggalMasaDepan->add(new DateInterval('P1D'));
    $hari = $tanggalMasaDepan->format('l');
    $tanggal = $tanggalMasaDepan->format('d');
    $bulan = $tanggalMasaDepan->format('m');
    $tahun = $tanggalMasaDepan->format('Y');

    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>Masa Depan</td>";
    echo "<td>" . $hari . "</td>";
    echo "<td>" . $tanggal . "</td>";
    echo "<td>" . $bulan . "</td>";
    echo "<td>" . $tahun . "</td>";
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output Tanggal Masa Lampau dan Masa Depan</title>
</head>
<body>
<h3>Output Tanggal</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Periode</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            ?>
        </tbody>
    </table>
</body>
</html>