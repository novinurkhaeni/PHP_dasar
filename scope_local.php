<?php
    $y = 10; //global
    function localVariable() {
        $x = 5; //local
        // variabel local, variabel yang dibuat di dalam function
        // variabel local hanya bisa digunakan 
        // di dalam function.
        echo "Menampilkan variabel local x = $x";
    }
    localVariable(); //menjalankan function

    // tidak bisa akses variabel local
    echo "variabel local x di luar function = $x";
?>