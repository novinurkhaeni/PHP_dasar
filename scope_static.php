<?php
    function myTest() {
        // di dalam function sebuah variabel local
        // akan di hapus sistem setelah dijalankan.
        // static agar variabel lokal tidak dihapus
        static $x = 1; //selalu menyimpan nilai terakhir
        echo $x . "<br>"; //tampilkan nilai x
        $x++; //x+1
    }
    myTest(); //1
    myTest(); //2
    myTest(); //3
?>