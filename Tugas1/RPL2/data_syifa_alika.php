<?php

// 2. Variabel nama siswa, jurusan, alamat
$namaSiswa = "Syifa Zamala";
$jurusan = "PPLG";
$alamat = "Kebumen";

// 3. Variabel umur, jumlah saudara
$umur = 18;
$jumlahSaudara = 3;

// 4. Variabel tinggi badan, nilai rata-rata
$tinggiBadan = 148;
$nilaiRataRata = 90.75;

// 5. Variabel status kelulusan
$statusKelulusan = true;

// 6. Variabel array daftar nilai, hobi
$daftarNilai = [88, 90, 92, 93];
$hobi = ["Memasak", "Mendaki Gunung", "Membaca"];

// 7. Variabel null
$ekstrakurikuler = null;

// 8. Class Siswa
class Siswa
{
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function tampilData()
    {
        return "Nama: $this->nama, Kelas: $this->kelas";
    }
}

// Membuat objek
$siswa = new Siswa("Syifa", "XII PPLG");

// 9. Menampilkan semua variabel
echo "Nama Siswa: $namaSiswa <br>";
echo "Jurusan: $jurusan <br>";
echo "Alamat: $alamat <br>";
echo "Umur: $umur Tahun <br>";
echo "Jumlah Saudara: $jumlahSaudara <br>";
echo "Tinggi Badan: $tinggiBadan cm <br>";
echo "Nilai Rata-rata: $nilaiRataRata <br>";
echo "Status Kelulusan: " . ($statusKelulusan ? "Lulus" : "Tidak Lulus") . "<br>";

echo "Daftar Nilai: " . implode(", ", $daftarNilai) . "<br>";
echo "Hobi: " . implode(", ", $hobi) . "<br>";

echo "Ekstrakurikuler: ";
var_dump($ekstrakurikuler);
echo "<br><br>";

echo $siswa->tampilData();

?>