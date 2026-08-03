<?php
$nama_siswa = "Nabila Khoirunnisa";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Tanjungsari,Petanahan,Kebumen";


echo "<h2>Data Siswa</h2>";
echo "Nama Siswa : " . $nama_siswa . "<br>";
echo "Jurusan : " . $jurusan . "<br>";
echo "Alamat : " . $alamat;


$umur = 17;
$jumlah_saudara = 2;


echo "<h2>Data Tambahan Siswa</h2>";
echo "Umur : " . $umur . " tahun<br>";
echo "Jumlah Saudara : " . $jumlah_saudara;


$tinggi_badan = 165;      
$nilai_rata_rata = 88.5;


echo "<h2>Data Tambahan Siswa</h2>";
echo "Tinggi Badan : " . $tinggi_badan . " cm<br>";
echo "Nilai Rata-rata : " . $nilai_rata_rata;


$status_kelulusan = "Lulus";

echo "<h2>Status Kelulusan</h2>";
echo "Status Kelulusan : " . $status_kelulusan;


$daftar_nilai = array(85, 90, 88, 92, 87);
$hobi = array("Menyanyi", "Mendengarkan musik", "Menonton Film");


echo "<h2>Data Array</h2>";

echo "Daftar Nilai: ";
foreach ($daftar_nilai as $nilai) {
    echo $nilai . " ";
}

echo "<br><br>";

echo "Hobi: ";
foreach ($hobi as $item) {
    echo $item . "<br>";
}


$ekstrakurikuler = null;

// Menampilkan data
echo "<h2>Data Ekstrakurikuler</h2>";
echo "Ekstrakurikuler: ";
var_dump($ekstrakurikuler);

// Duplicate Declaration class Siswa
class Siswa
{
    
    public $nama;
    public $kelas;


    public function tampilData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas;
    }
}


$siswa1 = new Siswa();
$siswa1->nama = "Nabila Khoirunnisa";
$siswa1->kelas = "XI RPL 1";

$siswa1->tampilData();


$nama_siswa = "Nabila Khoirunnisa";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Tanjungsari,Petanahan,Kebumen";
$umur = 17;
$jumlah_saudara = 2;
$tinggi_badan = 165;
$nilai_rata_rata = 88.5;
$status_kelulusan = "Lulus";

$daftar_nilai = array(85, 90, 88, 92, 87);
$hobi = array("Menyanyi", "Mendengarkan Musik", "Menonton Film");

$ekstrakurikuler = null;


echo "<h2>Data Siswa</h2>";
echo "Nama Siswa : $nama_siswa <br>";
echo "Jurusan : $jurusan <br>";
echo "Alamat : $alamat <br>";
echo "Umur : $umur tahun <br>";
echo "Jumlah Saudara : $jumlah_saudara <br>";
echo "Tinggi Badan : $tinggi_badan cm <br>";
echo "Nilai Rata-rata : $nilai_rata_rata <br>";
echo "Status Kelulusan : $status_kelulusan <br>";

echo "Daftar Nilai : ";
foreach ($daftar_nilai as $nilai) {
    echo $nilai . " ";
}

echo "<br>Hobi : ";
foreach ($hobi as $item) {
    echo $item . ", ";
}

echo "<br>Ekstrakurikuler : ";
var_dump($ekstrakurikuler);

echo "<hr>";


class Siswa2
{
    public $nama;
    public $kelas;

    public function tampilData()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
    }
}


$siswa1 = new Siswa2();
$siswa1->nama = "Nabila Khoirunnisa";
$siswa1->kelas = "XI RPL 1";


echo "<h2>Data dari Method tampilData()</h2>";
$siswa1->tampilData();
?>