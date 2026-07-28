<?php
$x = 5; // global scope
 
function myTest() {
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
?>