<?php
// scope global, variabel yang dibuat di luar function
// hanya bisa digunakan di luar function
$x = 5;

function myTest()
{
    // tidak bisa menggunakan variabel x di 
    // dalam function.
    // function hanya bisa menggunakan variabel yang
    // dibuat di dalam function tersebut.  
    echo "tampilkan: $x<br>";
}
// memanggil function myTest
myTest();

// menggunakan variabel x di luar function
echo "Variable x outside function is: $x";
