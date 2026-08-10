<?php
// pre-increment = menambahkan variabel dengan 1 kemudian mengembalikan nilai variabel
$x = 10;
echo "pre-increment x = 10 adalah " . ++$x . "<br>"; //10 + 1 = 11

// post-increment = mengembalikan nilai variabel lalu menambahkannya dengan 1
$x = 10;
echo "post-increment x = 10 adalah " . $x++ . "<br>"; //menampilkan nilai awal x, yaitu 10
// echo $x;

// pre-decrement = mengurangi variabel dengan 1 kemudian mengembalikan nilai variabel
$x = 10;
echo "pre-decrement x = 10 adalah " . --$x . "<br>"; //10 - 1 = 9

// post-decrement = mengembalikan nilai variabel lalu menguranginya dengan 1
$x = 10;
echo "post-decrement x = 10 adalah " . $x-- . "<br>"; //menampilkan nilai awal x, yaitu 10
?>