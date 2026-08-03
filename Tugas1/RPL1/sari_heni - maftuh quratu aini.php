<?php
// 1 & 2. Variabel nama siswa, jurusan, alamat
$nama_siswa = "Heni Sari";
$jurusan = "RPL";
$alamat = "Jawa Tengah";

// 3. Variabel umur, jumlah saudara
$umur = 17;
$jumlah_saudara = 2;

// 4. Variabel tinggi badan, nilai rata-rata
$tinggi_badan = 145.0;
$nilai_rata_rata = 9.0;

// 5. Variabel status kelulusan
$status_kelulusan = true;

// 6. Variabel array daftar nilai dan hobi
$daftar_nilai = [85, 90, 88, 92, 90];
$hobi = ["Membaca"];

// 7. Variabel null dengan nama ekstrakurikuler
$ekstrakurikuler = null;

// 8. Class Siswa dengan property nama, kelas, dan method tampilData()
class Siswa {
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function tampilData() {
        return "Nama Siswa: " . $this->nama . " | Jurusan: " . $this->kelas;
    }
}

// Inisialisasi objek dari class Siswa
$objek_siswa = new Siswa($nama_siswa, $jurusan);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa - Heni Sari</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <?php
    // 9. Menggunakan echo untuk menampilkan semua variabel dan method tampilData()
    echo "Nama: " . $nama_siswa . "<br>";
    echo "Jurusan: " . $jurusan . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Jumlah Saudara: " . $jumlah_saudara . "<br>";
    echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
    echo "Nilai Rata-rata: " . $nilai_rata_rata . "<br>";
    echo "Status Kelulusan: " . ($status_kelulusan ? 'Lulus' : 'Tidak') . "<br>";
    echo "Daftar Nilai: " . implode(', ', $daftar_nilai) . "<br>";
    echo "Hobi: " . implode(', ', $hobi) . "<br>";
    echo "Ekstrakurikuler: " . (is_null($ekstrakurikuler) ? 'Tidak ada' : $ekstrakurikuler) . "<br>";
    echo $objek_siswa->tampilData();
    ?>
</body>
</html>