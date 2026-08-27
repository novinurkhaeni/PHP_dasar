<?php
// pre-increment = menambahkan variabel dengan 1 kemudian mengembalikan nilai variabel
$x = 5;
echo "pre-increment x = 5 adalah " . ++$x . "<br>"; //6

// post-increment = mengembalikan nilai variabel AWAL lalu menambahkannya dengan 1
$x = 5;
echo "post-increment x = 5 adalah " . $x++ . "<br>"; //menampilkan nilai awal x, yaitu 5
// echo $x;
echo "$x <br>"; //6
// pre-decrement = mengurangi variabel dengan 1 kemudian mengembalikan nilai variabel
$x = 7;
echo "pre-decrement x = 7 adalah " . --$x . "<br>"; //6
// post-decrement = mengembalikan nilai awal variabel lalu menguranginya dengan 1
$x = 7;
echo "post-decrement x = 7 adalah " . $x-- . "<br>"; //menampilkan nilai awal x, yaitu 7
?>