<?php
// operator aritmatika adalah?
// operator = simbol
// simbol untuk melakukan operasi dasar matematika

$x = 10;
$y = 3;

// + untuk simbol penjumlahan
$penjumlahan = $x + $y; //13
echo $penjumlahan . "<br>";

// - untuk simbol pengurangan
$pengurangan = $x - $y; //7
echo $pengurangan . "<br>";

// * untuk simbol perkalian
$perkalian = $x * $y; //30
echo $perkalian . "<br>";

// / untuk simbol pembagian
$pembagian = $x / $y; //3.333333
printf("%.2f", $pembagian); //print dengan format float 2 digit belakang koma

// % untuk simbol modulus (sisa bagi)
$modulus = $x % $y; //1
echo "<br>" . $modulus . "<br>";

// ** untuk simbol pangkat
$pangkat = $x ** $y; //1000
echo $pangkat . "<br>";
