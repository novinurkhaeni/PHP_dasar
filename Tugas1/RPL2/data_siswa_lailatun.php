<?php

// 1. variabel string
$nama_siswa = "lailatun nisfi";
$jurusan = "RPL";
$alamat = "Kebumen";

// 2. variabel int
$umur = 17;
$jumlah_saudara = 2;

// 3. variabel float
$tinggi_badan = 145.5;
$nilai_rata_rata = 89.75;

// 4. variabel boolean
$status_kelulusan = false;

// 5. Variabel array daftar nilai, hobi
$daftar_nilai = [90, 85, 88, 92, 89];
$hobi = ["Membaca", "olahraga", "nonton"];
$ekstrakulikuler = ["pramuka"];

// 6. variabel Null
$ekstrakurikuler = null;

// 7. Class Siswa
class Siswa
{
    public $nama;
    public $kelas;

    public function tampilData()
    {
        echo "<br><b>Data dari Method tampilData()</b><br>";
        echo "nama : " . $this->nama . "<br>";
        echo "kelas : " . $this->kelas . "<br>";
    }
}

// membuat objek 
$siswa1 = new Siswa();
$siswa1->nama = $nama_siswa;
$siswa1->kelas = "XII RPL 2";

// 8. menampilkan semua variabel
echo "<h2>Data Siswa</h2>";
echo "nama siswa : $nama_siswa <br>";
echo "jurusan : $jurusan <br>";
echo "alamat : $alamat <br>";
echo "umur : $umur Tahun <br>";
echo "jumlah saudara : $jumlah_saudara <br><br>";
echo "tinggi badan : $tinggi_badan cm <br>";
echo "nilai rata-rata : $nilai_rata_rata <br><br>";
echo "status kelulusan : ";
echo $status_kelulusan ? "lulus" : "belum lulus";
echo "<br><br>";

echo "daftar nilai : ";
echo implode(", ", $daftar_nilai);
echo "<br><br>";

echo "hobi : ";
echo implode(", ", $hobi);
echo "<br><br>";

echo "ekstrakurikuler : ";
echo var_dump(", ", $ekstrakurikuler);
echo "<br><br>";

// 9. menampilkan method tampilData()
$siswa1->tampilData();

?>