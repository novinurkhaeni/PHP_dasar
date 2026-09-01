<?php
// Array adalah tipe data dimana suatu variabel memiliki banyak data/nilai
// ada 3 macam array:
// 1. Array index: array yang ditandai dengan index nomor
// 2. Array asosiatif: array yang memiliki kunci berupa nama/teks
// 3. Array multidimensi: array yang terdiri lebih dari 1 array

// CARA MEMBUAT ARRAY INDEX
// INDEX DIMULAI DARI 0, 1, 2
$siswa = array("Desti", "Bagas", "Amin");
$kota = ["Kebumen", "Yogyakarta", "Semarang"];
$siswa[1] = "Zilna"; //update array
$kota[] = "Ngawi"; //tambah array
$kota[] = "Malang";
unset($kota[1], $kota[2]); //remove array berdasarkan index
array_push($kota, "Jakarta", "Bandung", "Cianjur"); //menambahkan banyak array
echo $siswa[1] . "<br>";

foreach ($kota as $item) {
    echo $item . "<br>";
}

// ARRAY BISA BERISI BANYAK TIPE DATA
$myArray = ["teks", 5, 7.5, true, ["pisang", "apel"]];
echo $myArray[1] . "<br>";
echo $myArray[4][0] . "<br>";
foreach ($myArray as $item) {
    if (is_array($item)) {
        foreach ($item as $buah) {
            echo $buah . ", ";
        }
        echo "<br>";
    } else {
        echo $item . "<br>";
    }
}

// ARRAY ASOSIATIF
$produk = [
    "nama_produk" => "Kemeja",
    "warna" => "hitam",
    "bahan" => "katun",
    "stok" => 5
];
$produk["bahan"] = "Satin"; //update array
$produk["ukuran"] = "M"; //TAMBAH ARRAY
$produk += ["harga" => 100000, "kategori" => "Atasan"]; //menambah banyak array
unset($produk["stok"]); //remove array
echo $produk["bahan"] . "<br>";
foreach ($produk as $key => $value) {
    echo "$key : $value <br>";
}

// ARRAY MULTIDIMENSI
$daftar_produk = [
    [
        "nama_produk" => "Kemeja",
        "warna" => "hitam",
        "bahan" => "katun",
        "stok" => 5
    ],
    [
        "nama_produk" => "Celana",
        "warna" => "biru",
        "bahan" => "jeans",
        "stok" => 10
    ]
];

echo $daftar_produk[1]["nama_produk"] . "<br>";
foreach($daftar_produk as $item){
    foreach($item as $key => $value){
        echo "$key : $value <br>";
    }
}