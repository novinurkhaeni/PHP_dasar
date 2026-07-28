<?php
    $nama = 'Sasy Kirana Ramadhani';
    $jurusan = 'XII RPL 2';
    $alamat = 'Gadung Rejo, Klirong, Kebumen';
    $umur = 16;
    $jumlah_saudara = 4;
    $tinggi_badan = 153;
    $nilai_rata_rata = 85;
    $status_kelulusan = 'Hampir Lulus';
    $daftar_nilai = [75,80,85,90,95];
    $hobi = ["membaca", "menonton", "bermain roblox"];
    $ekstrakurikuler = "Badminton";

    class siswa
    {
        public $nama;
        public $kelas;

        public function tampilData ()
        {
            return "Nama: $this->nama <br>Kelas: $this->kelas";
        }
    }

    $siswa = new Siswa();
    $siswa->nama = "Sasy Kirana Ramadhani";
    $siswa->kelas = "XII RPL 2";

    echo "Nama : " . $nama . "<br>";
    echo "Jurusan: " . $jurusan . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Umur: " . $umur . "<br>";
    echo "Jumlah Saudara: " . $jumlah_saudara . "<br>";
    echo "Tinggi Badan: " . $tinggi_badan . "<br>";
    echo "Nilai Rata-rata: " . $nilai_rata_rata . "<br>";
    echo "Status Kelulusan: " .$status_kelulusan . "<br>";
    echo "Daftar Nilai: " . implode(", ", $daftar_nilai) . "<br>";
    echo "Hobi: " . implode(", ", $hobi) . "<br>";

    echo "Ekstrakulikuler: " . $ekstrakurikuler . "<br>";

    echo $siswa->tampilData();

?>