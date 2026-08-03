<?php
// mendefinisikan konstanta
define ("SEKOLAH", "SMK Ma'arif 9 Kebumen");
echo SEKOLAH;

// tidak bisa merubah konstanta
// define ("SEKOLAH", "SMK Indonesia");
// echo SEKOLAH;

// membuat function
function myTest() {
    define ("NAMA", "John Doe");
}
// menjalankan function
myTest();
echo "<br>". NAMA;

// MEMBUAT KONSTANTA DENGAN CONST
const GREETING = "Selamat Pagi!";
echo "<br>" . GREETING;

const STUDENTS = ["Maria", "John", "Alex"];
echo "<br>" . STUDENTS[1];
?>