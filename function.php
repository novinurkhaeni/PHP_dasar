<?php
// function adalah kumpulan kode program yang bisa digunakan berkali-kali
// function tidak bisa otomatis dijalankan sistem
// function harus dipanggil dulu untuk dijalankan sistem

// FUNCTION SEDERHANA
function myMessage()
{
    echo "Selamat Pagi! <br>";
}
myMessage();

// FUNCTION DENGAN PARAMETER
// myMessage($parameter), parameter adalah data yang akan dikirim ke function untuk digunakan
function haloNama($nama)
{
    echo "Halo, " . $nama . "<br>";
}
haloNama("John Doe");

// FUNCTION MENGEMBALIKAN NILAI
// Function menjalankan kumpulan kode program, lalu mengembalikan hasilnya dengan return
function penjumlahan($a, $b)
{
    $total = $a + $b;
    return $total;
}
$hasil = penjumlahan(1, 2);
echo $hasil . "<br>";


// FUNCTION REKURSIF
// Function yang memanggil dirinya sendiri
function faktorial($angka)
{
    // Kondisi berhenti (base case) dari proses rekursif
    // Jika nilai $angka kurang dari atau sama dengan 1,
    // maka function akan mengembalikan nilai 1
    // faktorial(1) menghasilkan 1
    // faktorial(0) juga menghasilkan 1
    if ($angka <= 1) {
        return 1;
    }

    // Contoh ketika $angka = 5:
    // faktorial(5)
    // = 5 * faktorial(4)
    // = 5 * 4 * faktorial(3)
    // = 5 * 4 * 3 * faktorial(2)
    // = 5 * 4 * 3 * 2 * faktorial(1)
    // Ketika mencapai faktorial(1), kondisi
    // $angka <= 1 terpenuhi sehingga mengembalikan 1
    return $angka * faktorial($angka - 1);
}
$hasil = faktorial(5);
echo "5! = " . $hasil . "<br>";


// tugas membuat function dengan parameter untuk menampilkan
// Panjang : 5
// Lebar : 6
// Luas : 30
function hitungLuas($panjang, $lebar)
{
    $luas = $panjang * $lebar;

    echo "Panjang : $panjang <br>";
    echo "Lebar   : $lebar <br>";
    echo "Luas    : $luas";
}

hitungLuas(5, 6);
