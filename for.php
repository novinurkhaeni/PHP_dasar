<?php
// for = melakukan perulangan sebanyak jumlah yang ditentukan
for($i = 1; $i <= 5; $i++){
    echo "This is number $i <br>";
}

// 5! faktorial
// 5! = 1*2*3*4*5 = 120
$angka = 5;
$hasil = 1;
for ($i=1; $i <= $angka; $i++){
    $hasil *= $i; // hasil = hasil * i
    echo "Langkah $i= $hasil <br>";
}
echo "$angka! adalah $hasil";
?>