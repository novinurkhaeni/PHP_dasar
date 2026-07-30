<?php
// nama file belum sesuai instruksi
// 1 & 2. Variabel nama siswa, jurusan, alamat
$nama_siswa = "Ava";
$jurusan = "RPL";
$alamat = "Jawa";

// 3. Variabel umur, jumlah saudara
$umur = 17;
$jumlah_saudara = 1;

// 4. Variabel tinggi badan, nilai rata-rata
$tinggi_badan = 167.0;
$nilai_rata_rata = 1; //??? Diset 1 sesuai permintaan

// 5. Variabel status kelulusan (ya lulus)
$status_kelulusan = true;

// 6. Variabel array daftar nilai dan hobi
$daftar_nilai = [45, 90, 30, 75, 55]; // Nilai ngawur
$hobi = ["rebahan sambil makan"];

// 7. Variabel ekstrakurikuler (diisi tidur seharian)
$ekstrakurikuler = "tidur seharian";

// 8. Class Siswa dengan property nama, kelas, dan method tampilData()
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
    <title>Data Siswa - Ava</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }

        .item {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Informasi Data Siswa</h2>

        <div class="item"><span class="label">Method Class Siswa:</span> <?php echo $objek_siswa->tampilData(); ?></div>
        <div class="item"><span class="label">Nama Siswa:</span> <?php echo $nama_siswa; ?></div>
        <div class="item"><span class="label">Jurusan:</span> <?php echo $jurusan; ?></div>
        <div class="item"><span class="label">Alamat:</span> <?php echo $alamat; ?></div>
        <div class="item"><span class="label">Umur:</span> <?php echo $umur; ?> tahun</div>
        <div class="item"><span class="label">Jumlah Saudara:</span> <?php echo $jumlah_saudara; ?></div>
        <div class="item"><span class="label">Tinggi Badan:</span> <?php echo $tinggi_badan; ?> cm</div>
        <div class="item"><span class="label">Nilai Rata-rata:</span> <?php echo $nilai_rata_rata; ?></div>
        <div class="item"><span class="label">Status Kelulusan:</span> <?php echo $status_kelulusan ? 'Lulus' : 'Belum Lulus'; ?></div>

        <div class="item"><span class="label">Daftar Nilai:</span> <?php echo implode(', ', $daftar_nilai); ?></div>
        <div class="item"><span class="label">Hobi:</span> <?php echo implode(', ', $hobi); ?></div>

        <div class="item"><span class="label">Ekstrakurikuler:</span> <?php echo $ekstrakurikuler; ?></div>
    </div>
</body>

</html>public