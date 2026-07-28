<?php

// 2. Variabel nama siswa, jurusan, alamat
$namaSiswa = "Meishyn";
$jurusan = "PPLG";
$alamat = "Kebumen";

// 3. Variabel umur, jumlah saudara
$umur = 17;
$jumlahSaudara = 1;

// 4. Variabel tinggi badan, nilai rata-rata
$tinggiBadan = 160.5;
$nilaiRataRata = 80.85;

// 5. Variabel status kelulusan
$statusKelulusan = true;

// 6. Variabel array daftar nilai, hobi
$daftarNilai = [88, 90, 92, 93];
$hobi = ["kulineran", "Menulis", "travelling"];

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
$siswa = new Siswa("Meisyn", "XII PPLG");

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