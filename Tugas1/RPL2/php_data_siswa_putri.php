<?php

$nama_siswa = "fajar eka lina saputri";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = " Podouhur, Kecamatan Klirong, Kabupaten Kebumen";

$umur = 17;
$jumlah_saudara = 3;


$tinggi_badan = 166.5;
$nilai_rata_rata = 95.75;


$status_kelulusan = true;


$daftar_nilai = [90, 85, 88, 92, 89];
$hobi = ["Menyanyi", "Main Roblox"];


$ekstrakurikuler = null;

// 8. Class Siswa
class Siswa
{
    public $nama;
    public $kelas;

    public function tampilData()
    {
        return "Nama: $this->nama <br>Kelas: $this->kelas";
    }
}

$siswa = new Siswa();
$siswa->nama = $nama_siswa;
$siswa->kelas = "XII RPL 2";

echo "<h2>Data Siswa</h2>";
echo "Nama Siswa : $nama_siswa <br>";
echo "Jurusan : $jurusan <br>";
echo "Alamat : $alamat <br>";
echo "Umur : $umur tahun <br>";
echo "Jumlah Saudara : $jumlah_saudara <br>";
echo "Tinggi Badan : $tinggi_badan cm <br>";
echo "Nilai Rata-rata : $nilai_rata_rata <br>";
echo "Status Kelulusan : " . ($status_kelulusan ? "Lulus" : "Tidak Lulus") . "<br>";

echo "Daftar Nilai : " . implode(", ", $daftar_nilai) . "<br>";
echo "Hobi : " . implode(", ", $hobi) . "<br>";

echo "Ekstrakurikuler : ";
var_dump($ekstrakurikuler);
echo "<br><br>";

echo "<h3>Data dari Class</h3>";
echo $siswa->tampilData();

?>