<?php
// concatenation = menggabungkan dua string dengan titik (bisa lebih dari 2)
$txt1 = "Hello";
$txt2 = "World";
echo $txt1 . " " . $txt2 . "<br>";

// concatenation assignment menggabungkan string dengan .= ( bisa lebih dari 2 variabel string)
// tapi jika ditengah digabung dengan string langsung akan error
$txt3 = "...";
echo $txt1 .= $txt2 .= $txt3;
?>