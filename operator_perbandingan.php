<?php
// operator perbandingan adalah untuk membandingkan 2 nilai. hasilnya TRUE dan FALSE

// Membandingkan nilai saja tanpa membandingkan tipe data
$x = 100;
$y = '100';
var_dump($x == $y); //TRUE
echo "<br>";

// Membandingkan nilai dan tipe data
var_dump($x === $y);//FALSE
echo "<br>";

// Tidak sama dengan tanpa membandingkan tipe data
var_dump($x != $y); //FALSE
echo "<br>";
var_dump($x <> $y); //FALSE
echo "<br>";

//Tidak sama dengan tapi membandingkan nilai dan tipe data
var_dump($x !== $y); //TRUE
echo "<br>";

// LEBIH BESAR
$x = 50;
$y = 70;
var_dump($x > $y); //FALSE
echo "<br>";

// LEBIH KECIL / KURANG DARI
var_dump($x < $y);//TRUE
echo "<br>";

// LEBIH BESAR SAMA DENGAN
$x = 50;
$y = 50;
var_dump($x >= $y); //TRUE
echo "<br>";

// kurang dari sama dengan
var_dump($x <= $y); //true
echo "<br>";
?>