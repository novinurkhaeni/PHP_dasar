<?php

// 1. Buat konstanta
define("BATAS_LULUS", 75);
define("MIN_KEHADIRAN", 80);

// 2. Buat variabel (Contoh pengisian nilai standar)
$nama = "Desti Resti";
$nilai_tugas = 83;
$nilai_uts = 73;
$nilai_uas = 86;
$kehadiran = 87;

// 3. Buat variabel nilai akhir dengan operator aritmatika dengan bobot
$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

// 4. Buat variabel total nilai dengan operator penugasan += untuk menghitung jumlah nilai tugas, UTS, dan UAS
$total_nilai = 0;
$total_nilai += $nilai_tugas;
$total_nilai += $nilai_uts;
$total_nilai += $nilai_uas;

// 5. Gunakan operator perbandingan untuk membandingkan
$nilai_lulus = $nilai_akhir >= BATAS_LULUS; // simpan di variabel nilai_lulus
$kehadiran_cukup = $kehadiran >= MIN_KEHADIRAN; // simpan di variabel kehadiran_cukup

// 6. Buat variabel syarat_lulus dengan operator logika &&
$syarat_lulus = $nilai_lulus && $kehadiran_cukup;

// 7. Buat variabel perlu_perhatian dengan operator logika ||
$perlu_perhatian = ($nilai_akhir < 75) || ($kehadiran < 80);

// 8. Buat variabel tidak_lulus dengan operator logika !
$tidak_lulus = !$syarat_lulus;

// 9. Tampilkan seluruh hasil menggunakan echo
echo "=== DATA SISWA ===<br>";
echo "Nama: " . $nama . "<br>";
echo "Nilai Tugas: " . $nilai_tugas . "<br>";
echo "Nilai UTS: " . $nilai_uts . "<br>";
echo "Nilai UAS: " . $nilai_uas . "<br>";
echo "Kehadiran: " . $kehadiran . "%<br><br>";

echo "=== HASIL PERHITUNGAN ===<br>";
echo "Nilai Akhir: " . $nilai_akhir . "<br>";
echo "Total Nilai: " . $total_nilai . "<br><br>";

echo "=== STATUS LOGIKA ===<br>";
echo "Nilai Lulus? : " . ($nilai_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Kehadiran Cukup? : " . ($kehadiran_cukup ? "TRUE" : "FALSE") . "<br>";
echo "Syarat Lulus Terpenuhi? : " . ($syarat_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Perlu Perhatian? : " . ($perlu_perhatian ? "TRUE" : "FALSE") . "<br>";
echo "Tidak Lulus? : " . ($tidak_lulus ? "TRUE" : "FALSE") . "<br>";

?>