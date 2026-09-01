<?php
// konstanta mirip dengan variabel.
// Bedanya variabel bisa diubah dan dihapus.
// konstanta tidak bisa dirubah dan dihapus.
// variabel punya scope (global, local, static), konstanta bersifat global.
// mendefinisikan konstanta
define("SEKOLAH", "SMK Ma'arif 9 Kebumen");
echo SEKOLAH . "<br>";

// tidak bisa merubah konstanta
define("SEKOLAH", "SMK Indonesia");
echo SEKOLAH;

// contoh variabel
$nama = "Reza";
// echo $nama;
$nama = "Andrianzah";
echo $nama;

// membuat function
function myTest()
{
    define("NAMA", "John Doe");
}
// menjalankan function
myTest();
echo "<br>" . NAMA;

// MEMBUAT KONSTANTA DENGAN CONST
const GREETING = "Selamat Pagi!";
echo "<br>" . GREETING;

const STUDENTS = ["Maria", "John", "Alex"];
echo "<br>" . STUDENTS[1];
