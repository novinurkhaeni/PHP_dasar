<?php
// nama file setengah
// soal 2 benar
$nama_siswa = "Ma'ruf Amin Alfauzi";
$jurusan = "Rekayasa perangkat Lunak";
$alamat = "Gebangsari Klirong Kebumen";

// nomor 3 benar
$umur = 17;
$jumlah_saudara = 2;

// nomor 4 benar
$tinggi_badan = 170;
$nilai_rata_rata = 90;

// nomor 5 benar
$status_kelulusan = false;

// nomor 6 benar
$daftar_nilai = [82, 90, 98, 82];
$hobi = ["Tidur", "Mancing", "Bermain  Game"];

// nomor 7 benar
$ekstrakurikuler = null;

// nomor 8 benar
class Siswa {
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function tampilData() {
        return "Nama siswa $this->nama kelas $this->kelas.";
    }
}

$siswaObj = new Siswa($nama_siswa, "XII RPL 2");


echo "<h2>--- DATA SISWA ---</h2>";

echo "<b>Nama Siswa:</b> " . $nama_siswa . "<br>";
echo "<b>Jurusan:</b> " . $jurusan . "<br>";
echo "<b>Alamat:</b> " . $alamat . "<br>";

echo "<b>Umur:</b> " . $umur . " tahun<br>";
echo "<b>Jumlah Saudara:</b> " . $jumlah_saudara . "<br>";

echo "<b>Tinggi Badan:</b> " . $tinggi_badan . " cm<br>";
echo "<b>Nilai Rata-rata:</b> " . $nilai_rata_rata . "<br>";

echo "<b>Status Kelulusan:</b> " . ($status_kelulusan ? "Lulus" : "Belum Lulus") . "<br>";

echo "<b>Daftar Nilai:</b> " . implode(", ", $daftar_nilai) . "<br>";
echo "<b>Hobi:</b> " . implode(", ", $hobi) . "<br>";

echo "<b>Ekstrakurikuler:</b> " . var_export($ekstrakurikuler, true) . "<br><br>";

echo "<b>Hasil Method Class Siswa:</b><br>";
echo $siswaObj->tampilData();

?>