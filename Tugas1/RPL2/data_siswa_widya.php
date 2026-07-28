<?php
// ================================================
// File: data_siswa.php
// Program Data Siswa Menggunakan PHP
// ================================================

// 2. Variabel Tipe Data String
$nama_siswa = "Widya Fajrian";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Jatimalang";

// 3. Variabel Tipe Data Integer
$umur = 17;
$jumlah_saudara = 3;

// 4. Variabel Tipe Data Float / Double
$tinggi_badan = 165;
$nilai_rata_rata = 80.70;

// 5. Variabel Tipe Data Boolean
$status_kelulusan = true;

// 6. Variabel Tipe Data Array
$daftar_nilai = [85, 90, 88, 92, 85];
$hobi = ["Banyak", "Memancing", "Ngabisin duit"];

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

// 9. Menampilkan semua variabel dan method tampilData() menggunakan echo
echo "===================================================================\n";
echo "                 DATA SISWA\n";
echo "===================================================================\n\n";

// Menampilkan Tipe Data String
echo "--- Tipe Data String ---\n";
echo "Nama Siswa: " . $nama_siswa . "\n";
echo "Jurusan   : " . $jurusan . "\n";
echo "Alamat    : " . $alamat . "\n\n";
echo "<br>";

// Menampilkan Tipe Data Integer
echo "--- Tipe Data Integer ---\n";
echo "Umur          : " . $umur . " tahun\n";
echo "Jumlah Saudara: " . $jumlah_saudara . " orang\n\n";
echo "<br>";

// Menampilkan Tipe Data Float
echo "--- Tipe Data Float ---\n";
echo "Tinggi Badan   : " . $tinggi_badan . " cm\n";
echo "Nilai Rata-rata: " . $nilai_rata_rata . "\n\n";
echo "<br>";

// Menampilkan Tipe Data Boolean
echo "--- Tipe Data Boolean ---\n";
echo "Status Kelulusan: " . ($status_kelulusan ? "Lulus (true)" : "Tidak Lulus (false)") . "\n\n";
echo "<br>";

// Menampilkan Tipe Data Array
echo "--- Tipe Data Array ---\n";
echo "Daftar Nilai: " . implode(", ", $daftar_nilai) . "\n";
echo "Hobi        : " . implode(", ", $hobi) . "\n\n";
echo "<br>";

// Menampilkan Tipe Data Null
echo "--- Tipe Data Null ---\n";
echo "Ekstrakurikuler: " . var_export($ekstrakurikuler, true) . "\n\n";
echo "<br>";

// Menampilkan Hasil dari Method tampilData()
echo "--- Class & Method Siswa ---\n";
echo "Hasil tampilData(): " . $siswa1->tampilData() . "\n";
echo "<br>";
echo "===================================================================\n";
echo "<br>";

?>