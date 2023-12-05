<?php
$todayDate = "30 nov 2023"; //pendefinisian tanggal awal  
$returnDate = date('d-m-Y', strtotime('+100 day', strtotime($todayDate))); //operasi penjumlahan tanggal sebanyak 7 hari 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php tentang date</title>
</head>

<body>
        <h2>
        Tanggal hari ini = <?= $todayDate;  ?>
        <br>
        Tanggal 100 hari dari skrg = <?= $returnDate;  ?>
        </h2>
</body>

</html>