<?php
// STRING = tipe data untuk teks/karakter
$nama = 'Novi Nurkhaeni';
var_dump($nama);
echo "<br>";

// INT = tipe data untuk angka bulat positif dan negatif
$umur = 25;
$suhu = -20;
var_dump($umur);
echo "<br>";

// FLOAT = tipe data untuk bilangan desimal
$nilai = 85.75;
var_dump($nilai);
echo "<br>";

//BOOLEAN = tipe data untuk nilai benar dan salah
$is_active = TRUE;
$lulus = FALSE;
var_dump($lulus);
echo "<br>";

// ARRAY = tipe data untuk list/daftar
$mobil = array("Alphard", "Fortuner", "Yaris");
$siswa = ["Tesa", "Allea", "Lutfi"];
var_dump($mobil);
echo "<br>";
echo $siswa[0];
echo "<br>";

// EMPTY = tipe data dengan nilai kosong
$x = null;
$y = "";
var_dump($y);
echo "<br>";

// Mengubah tipe data
$nilai = 80;
var_dump($nilai);
$nilai = 'B';
var_dump($nilai);

/* Object = untuk menyimpan data dan 
fungsi di dalam class.
Contoh: membuat class bernama Car.
class digunakan untuk membuat cetakan
atau template suatu object*/
class Car {
    /* properti atau variabel
    yang dimiliki object. 
    class car mempunyai variabel color & model. 
    public adalah hak akses. dapat diakses
    di dalam dan di luar class.*/
    public $color;
    public $model;

    /* function atau method 
    __construct function yang akan otomatis
    dijalankan oleh class Car*/
    public function __construct($color, $model) {
        /* $this berarti objek yang sedang dijalankan saat ini */
      $this->color = $color;
      $this->model = $model;
    }

    /* function tambahan yang dimiliki class*/
    public function message() {
        // mengembalikan nilai My car is 
      return "Mobil saya berwarna " . $this->color . " " . $this->model . "!";
    }
  }
  
//   membuat object dari template Car;
  $myCar = new Car("blue", "BMW");
  echo "<br>";
  var_dump($myCar);
  echo "<br>";
//   memanggil function message di object myCar
  echo $myCar->message();

?>