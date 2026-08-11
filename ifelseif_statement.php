<?php
// digunakan jika mempunya lebih dari 2 kondisi dan tidak ingin menjalankan semua kondisi.
$nilai = 80;
// kondisi pertama
// jika kondisi pertama salah, maka akan mengecek kondisi kedua dan seterusnya
if($nilai >= 90) {
    echo "Sangat Baik! <br>";
}elseif($nilai >= 80){
    echo "Baik! <br>";
}elseif($nilai >= 75){
    echo "Cukup! <br>";
}else{
    echo "Kurang! <br>";
}
?>