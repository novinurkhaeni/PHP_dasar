<?php
// ================================================
// File: data_siswa.php
// Program Data Siswa Menggunakan PHP
// ================================================

// 2. Variabel Tipe Data String
$nama_siswa = "Bagas Priyotomo";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "kaliwungu";

// 3. Variabel Tipe Data Integer
$umur = 17;
$jumlah_saudara = 2;

// 4. Variabel Tipe Data Float / Double
$tinggi_badan = 172.5;
$nilai_rata_rata = 96.75;

// 5. Variabel Tipe Data Boolean
$status_kelulusan = true;

// 6. Variabel Tipe Data Array
$daftar_nilai = [86, 90, 88, 92, 90];
$hobi = ["Bermain Game", "Menonton Animasi", "Membaca Komik"];

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

// output kurang rapih
// 9. Menampilkan semua variabel dan method tampilData() menggunakan echo
echo "===================================================================\n";
echo "                 DATA SISWA\n";
echo "===================================================================\n\n";

// Menampilkan Tipe Data String
echo "--- Tipe Data String ---\n";
echo "Nama Siswa: " . $nama_siswa . "\n";
echo "Jurusan   : " . $jurusan . "\n";
echo "Alamat    : " . $alamat . "\n\n";

// Menampilkan Tipe Data Integer
echo "--- Tipe Data Integer ---\n";
echo "Umur          : " . $umur . " tahun\n";
echo "Jumlah Saudara: " . $jumlah_saudara . " orang\n\n";

// Menampilkan Tipe Data Float
echo "--- Tipe Data Float ---\n";
echo "Tinggi Badan   : " . $tinggi_badan . " cm\n";
echo "Nilai Rata-rata: " . $nilai_rata_rata . "\n\n";

// Menampilkan Tipe Data Boolean
echo "--- Tipe Data Boolean ---\n";
echo "Status Kelulusan: " . ($status_kelulusan ? "Lulus (true)" : "Tidak Lulus (false)") . "\n\n";

// Menampilkan Tipe Data Array
echo "--- Tipe Data Array ---\n";
echo "Daftar Nilai: " . implode(", ", $daftar_nilai) . "\n";
echo "Hobi        : " . implode(", ", $hobi) . "\n\n";

// Menampilkan Tipe Data Null
echo "--- Tipe Data Null ---\n";
echo "Ekstrakurikuler: " . var_export($ekstrakurikuler, true) . "\n\n";

// Menampilkan Hasil dari Method tampilData()
echo "--- Class & Method Siswa ---\n";
echo "Hasil tampilData(): " . $siswa1->tampilData() . "\n";
echo "=========================================\n";
?>