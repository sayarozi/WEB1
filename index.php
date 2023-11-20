<?php
//operator perbandingan
var_dump (1 < 5);
echo "</br>";       #output baris ke-1
var_dump (1 > 5);
echo "</br>";       #output baris ke-2
var_dump (1 <= 5);
echo "</br>";       #output baris ke-3
var_dump (1 >= 5);
echo "</br>";       #output baris ke-4
var_dump (1 == 5);
echo "</br>";       #output baris ke-5
var_dump (1 != 5);
echo "</br>";       #output baris ke-6

//operator identitas
var_dump (1 === 5); #output baris ke-7
echo "</br>"; 
var_dump (1 !== 5); #output baris ke-8

//operator logika
echo "</br>"; 
$x = 10;
echo var_dump ($x < 20 && $x % 2 == 0) . "</br>";   #output baris ke-9
$x = 10;

echo var_dump ($x < 20 || $x % 2 == 0) . "</br>";   #output baris ke-10

?>