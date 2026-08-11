<?php
// if else digunakan ketika kita hanya mempunyai 2 kondisi (benar dan salah)
// if benar maka akan menjalan kan code if, jika salah maka akan menjalankan code else

$umur = 17;
if($umur >= 17){
    // Dijalankan jika kondisi benar
    echo "Boleh memiliki KTP <br>";
}else{
    // dijalankan jika kondisi salah
    echo "Tidak boleh memiliki KTP <br>";
}

$nilai = 80;
if($nilai >= 75){
    echo "Anda Lulus! <br>";
}else{
    echo "Anda Tidak Lulus! <br>";
}

echo $nilai >= 75? "Anda Lulus!" : "Anda Tidak Lulus!";
?>