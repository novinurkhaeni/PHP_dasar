<?php

// 2. Variabel nama siswa, jurusan, alamat
$nama_siswa = "Ratu Annisa";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Jl. Klegenwonosari";

// 3. Variabel umur, jumlah saudara
$umur = 17;
$jumlah_saudara = 3;

// 4. Variabel tinggi badan, nilai rata-rata
$tinggi_badan = 158.5;
$nilai_rata_rata = 88.75;

// 5. Variabel status kelulusan
$status_kelulusan = true;

// 6. Variabel array daftar nilai, hobi
$daftar_nilai = [90, 85, 88, 92, 89];
$hobi = ["Roblox", "Makan", "Coding"];

// 7. Variabel null dengan nama ekstrakurikuler
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

// Membuat objek
$siswa = new Siswa();
$siswa->nama = $nama_siswa;
$siswa->kelas = "XII RPL 2";

// 9. Menampilkan semua variabel dan method tampilData()
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