<?php
// 1. File disimpan dengan nama: data_siswa.php

// 2. Variabel String
$nama_siswa = "Achmad Shulthoni Arifin";
$jurusan = "Pengembangan Perangkat Lunak dan GIM";
$alamat = "Kebumen";

// 3. Variabel Integer
$umur = 17;
$jumlah_saudara = 3;

// 4. Variabel Float
$tinggi_badan = 178.5;
$nilai_rata_rata = 89.5;

// 5. Variabel Boolean
$status_kelulusan = false;

// 6. Variabel Array
$daftar_nilai = [85, 90, 88, 92];
$hobi = ["Mancing", "Menonton film", "Main Game"];

// 7. Variabel Null
$ekstrakurikuler = null;

// 8. Class Siswa (dengan property nama, kelas, dan method tampilData)
class Siswa {
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function tampilData() {
        return "Siswa bernama $this->nama dari kelas $this->kelas.";
    }
}

// Inisialisasi Object dari Class Siswa
$siswaObj = new Siswa($nama_siswa, "XII RPL 2");


// 9. Menampilkan semua variabel dan method menggunakan echo
echo "<h2>--- DATA SISWA ---</h2>";

// Tampil String
echo "<b>Nama Siswa:</b> " . $nama_siswa . "<br>";
echo "<b>Jurusan:</b> " . $jurusan . "<br>";
echo "<b>Alamat:</b> " . $alamat . "<br>";

// Tampil Integer
echo "<b>Umur:</b> " . $umur . " tahun<br>";
echo "<b>Jumlah Saudara:</b> " . $jumlah_saudara . "<br>";

// Tampil Float
echo "<b>Tinggi Badan:</b> " . $tinggi_badan . " cm<br>";
echo "<b>Nilai Rata-rata:</b> " . $nilai_rata_rata . "<br>";

// Tampil Boolean
echo "<b>Status Kelulusan:</b> " . ($status_kelulusan ? "Lulus" : "Belum Lulus") . "<br>";

// Tampil Array
echo "<b>Daftar Nilai:</b> " . implode(", ", $daftar_nilai) . "<br>";
echo "<b>Hobi:</b> " . implode(", ", $hobi) . "<br>";

// Tampil Null
echo "<b>Ekstrakurikuler:</b> " . var_export($ekstrakurikuler, true) . "<br><br>";

// Tampil Method dari Class Siswa
echo "<b>Hasil Method Class Siswa:</b><br>";
echo $siswaObj->tampilData();

// Jangan lupa tag penutup buat Pak/Bu Guru :)
?>