<?php
// membandingakan nilai 
// tanpa membandingkan tipe data
$x = 100;
$y = '100';
var_dump($x == $y);
echo "<br>";

// membandingkan nilai dan tipe data
var_dump($x === $y);
echo "<br>";

// tidak sama dengan
// tanpa membandingkan tipe data
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";

// tidak sama dengan
// membandingkan nilai dan tipe data
var_dump($x !== $y); //true
echo "<br>";

// lebih besar
$x = 50;
$y = 70;
var_dump($x > $y);
echo "<br>";
// kurang dari
var_dump($x < $y);
echo "<br>";

// lebih dari sama dengan
$x = 50;
$y = 50;
var_dump($x >= $y);
echo "<br>";
// kurang dari sama dengan
var_dump($x <= $y);
echo "<br>";
?>