<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>
<body>
    <h1>Membuat perulangan tabel</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($b = 1; $b <= 10; $b++) { #b untuk baris
            echo "<tr>";
            for ($k = 1; $k <= 8; $k++) { #k untuk kolom
                echo "<td> $b,$k </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>