<?php
$nama = 'Ika Putri Mulyani';
$jurusan = 'XII RPL 2';
$alamat = 'Klirong, Bendogarap';
$umur = 17;
$jumlah_saudara = 2;
$tinggi_badan = 152.2;
$nilai_rata_rata = 85.5;
$status_kelulusan = 'Hampir Lulus';

// ARRAY
$daftar_nilai = [80, 85, 90, 87, 86];
$hobi = ["Badminton", "Mendengarkan Musik"];

// NULL
$ekstrakulikuler = "Badminton";

// CLASS
class Siswa
{
    public $nama;
    public $kelas;

    public function tampilDATA ()
    {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
    }
}

$siswa = new Siswa();
$siswa->nama = "Ika Putri Mulyani";
$siswa->kelas = "XII RPL 2";

// OUTPUT
echo "Nama Siswa : " . $nama . "<br>";
echo "Kelas : " . $jurusan . "<br>";
echo "Alamat : " . $alamat . "<br>";
echo "Umur : " . $umur . "<br>";
echo "Jumlah Saudara : " . $jumlah_saudara . "<br>";
echo "Tinggi Badan : " . $tinggi_badan . "<br>";
echo "Nilai Rata Rata: " . $nilai_rata_rata . "<br>";
echo "Status Kelulusan : " . $status_kelulusan . "<br>";
echo "Daftar Nilai : ". implode(", ", $daftar_nilai) . "<br>";
echo "Hobi : " . implode(", ", $hobi) . "<br>";
echo "Ekstrakulikuler : " . $ekstrakulikuler . "<br>";
echo "<br><br>";

$siswa->tampilData();


?>