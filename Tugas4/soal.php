<?php

// 1. IF STATEMENT - APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$umur = 20;

if ($umur >= 18 {
    echo "Anda sudah dewasa";
}

echo "<hr>";


// 2. IF ELSE - APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$nilai = 80;

if ($nilai >= 75) {
    echo "Lulus";
else {
    echo "Tidak Lulus";
}

echo "<hr>";


// 3. IF ELSEIF - APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$nilai_akhir = 85;

if ($nilai_akhir >= 90) {
    echo "Predikat A";
} elseif ($nilai_akhir >= 80 {
    echo "Predikat B";
} elseif ($nilai_akhir >= 70) {
    echo "Predikat C";
} else {
    echo "Predikat D";
}

echo "<hr>";


// 4. NESTED IF - APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$umur = 18;
$sudah_daftar = true;

if ($umur >= 17) {
    if ($sudah_daftar = true) {
        echo "Boleh mengikuti ujian";
    else {
        echo "Belum melakukan pendaftaran";
    }
} else {
    echo "Umur belum memenuhi";
}

echo "<hr>";


// 5. SWITCH - APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$hari = 3;

switch ($hari) {
    case 1:
        echo "Senin";
    case 2:
        echo "Selasa";
    case 3:
        echo "Rabu"
    case 4:
        echo "Kamis";
    case 5:
        echo "Jumat";
    case 6:
        echo "Sabtu";
    case 7:
        echo "Minggu";
    default
        echo "Nomor hari tidak valid";
}

?>