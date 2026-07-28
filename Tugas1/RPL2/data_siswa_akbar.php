<?php
// ================================================
// File: data_siswa.php
// Program Data Siswa Menggunakan PHP
// ================================================

// 2. Variabel Tipe Data String

$nama_siswa  = "Akbar Hidayatulloh";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Jogomertan  ";

// 3. Variabel Tipe Data Integer
$umur = 17;
$jumlah_saudara = 2;

// 4. Variabel Tipe Data Float / Double
$tinggi_badan = 172;
$nilai_rata_rata = 96.55;

// 5. Variabel Tipe Data Boolean
$status_kelulusan = true;

// 6. Variabel Tipe Data Array
$daftar_nilai = [89, 86, 88, 92, 89];
$hobi = ["ANIME", "MUSIK", "GAME" ,"MANCING"];

// 7. Variabel Tipe Data Null
$ekstrakurikuler = null;

// 8. Class Siswa
class Siswa {
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function tampilData() {
        return "Nama: " . $this->nama . " | Kelas: " . $this->kelas;
    
    }
}

// Instansiasi Objek Siswa
$siswa1 = new Siswa($nama_siswa, "XII RPL 2");


// Menampilkan Tipe Data String

echo " <br> Nama Siswa: " . $nama_siswa . "\n";
echo " <br> Jurusan   : " . $jurusan . "\n";
echo "<br> Alamat    : " . $alamat . "\n\n";

// Menampilkan Tipe Data Integer

echo "<br> Umur      : " . $umur . " tahun\n";
echo "<br> Jumlah Saudara:" . $jumlah_saudara . " orang\n\n";

// Menampilkan Tipe Data Float

echo "<br> Tinggi Badan   : " . $tinggi_badan . " cm\n";
echo " <br> Nilai Rata-rata: " . $nilai_rata_rata . "\n\n";

// Menampilkan Tipe Data Boolean

echo "<br>Status Kelulusan: " . ($status_kelulusan ? "Lulus (true)" : "Tidak Lulus (false)") . "\n\n";

// Menampilkan Tipe Data Array

echo "<br>Daftar Nilai: " . implode(", ", $daftar_nilai) . "\n";
echo "<br> Hobi        : " . implode(", ", $hobi) . "\n\n";

// Menampilkan Tipe Data Null
echo "<br> Ekstrakurikuler: " . var_export($ekstrakurikuler, true) . "\n\n";

// Menampilkan Hasil dari Method tampilData()

echo "<br> Hasil tampilData(): " . $siswa1->tampilData() . "\n";

?>