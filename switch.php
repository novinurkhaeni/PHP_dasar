<?php
// switch : untuk menjalankan tindakan tertentu dengan kondisi yang berbeda

// mempunyai data warna favorit
$warna_favorit = "kuning";

// menjalankan kondisi switch untuk warna favorit
switch ($warna_favorit) {
    //setiap  case akan dijalankan 1 kali, dengan membandingkan nilai data dengan nilai case tersebut.
    // jika case tersebut cocok, maka akan menjalankan break untuk keluar dari sistem switch.
    // jika tidak ada yang cocok maka akan menjalankan default.
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

echo "<br>";
// case yang berbeda tapi menampilkan kondisi yang sama.
$hari = "Sabtu";
switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "Hari yang sangat panjang!";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari yang menyenangkan!";
        break;
    default:
        echo "Terjadi kesalahan sistem";
}
