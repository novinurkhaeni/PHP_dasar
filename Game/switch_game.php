<?php

// =====================================================
// DEBUGGING SWITCH PHP
// =====================================================
// Tugas:
// 1. Temukan semua kesalahan pada program.
// 2. Perbaiki kesalahan tersebut.
// 3. Berikan komentar // pada setiap bagian yang diperbaiki.
// 4. Jelaskan fungsi switch, case, break, dan default.
// 5. Jalankan program dan tuliskan outputnya.
// =====================================================


// -----------------------------------------------------
// BAGIAN 1 - WARNA FAVORIT
// -----------------------------------------------------

$warna_favorit = "kuning";

switch ($warna_favorit) {
    case "merah":
        echo "Warna favorit saya merah";
        break;
    case "kuning":
        echo "Warna favorit saya kuning";
        break;
    case "hijau":
        echo "Warna favorit saya hijau";
        break;
    default:
        echo "Warna favorit saya bukan merah, kuning, dan hijau";
}

echo "<br><br>";


// -----------------------------------------------------
// BAGIAN 2 - HARI
// -----------------------------------------------------

$hari = "Sabtu";
switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "Hari sekolah";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari yang menyenangkan!";
        break;
    default:
        echo "Hari tidak valid";
}

echo "<br><br>";


// -----------------------------------------------------
// BAGIAN 3 - SPAREPART MOTOR
// -----------------------------------------------------

$sparepart = "oli";
switch ($sparepart) {
    case "oli":
        echo "Harga oli Rp50.000";
        break;
    case "kampas rem":
        echo "Harga kampas rem Rp75.000";
        break;
    case "busi":
        echo "Harga busi Rp25.000";
        break;
    default:
        echo "Sparepart tidak tersedia";
}

echo "<br><br>";


// -----------------------------------------------------
// BAGIAN 4 - TRANSMISI
// -----------------------------------------------------

$transmisi = "manual";
switch ($transmisi) {
    case "manual":
        echo "Transmisi manual";
        break;
    case "matic":
        echo "Transmisi otomatis";
        break;
    case "CVT":
        echo "Transmisi CVT";
        break;
    default:
        echo "Transmisi tidak diketahui";
}

?>