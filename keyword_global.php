<?php
// variabel global
$x = 5;
$y = 10;
function myTest() {
    // mengakses variabel global di dalam function
    global $x, $y;
    $y = $x + $y;
}
myTest();
echo $y; // outputs 15
?>