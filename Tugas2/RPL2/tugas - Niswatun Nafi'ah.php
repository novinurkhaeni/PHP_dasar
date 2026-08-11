<?php

// buat konstanta
define("BATAS_LULUS", 75);
define("MIN_KEHADIRAN", 80);

// buat variabel 
$nama = "Niswatun Nafi'ah";
$nilai_tugas = 80;
$nilai_uts = 70;
$nilai_uas = 85;
$kehadiran = 85;

// buat variabel nilai akhir dengan operator aritmatika dengan bobot
$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

// buat variabel total nilai dengan operator penugasan += untuk menghitung jumlah nilai tugas, UTS, dan UAS
$total_nilai = 0;
$total_nilai += $nilai_tugas;
$total_nilai += $nilai_uts;
$total_nilai += $nilai_uas;

// gunakan operator perbandingan untuk membandingkan
$nilai_lulus = $nilai_akhir >= BATAS_LULUS; // simpan di variabel nilai_lulus
$kehadiran_cukup = $kehadiran >= MIN_KEHADIRAN; // simpan di variabel kehadiran_cukup

// buat variabel syarat_lulus dengan operator logika &&
$syarat_lulus = $nilai_lulus && $kehadiran_cukup;

// buat variabel perlu_perhatian dengan operator logika ||
$perlu_perhatian = ($nilai_akhir < 75) || ($kehadiran < 80);

// buat variabel tidak_lulus dengan operator logika !
$tidak_lulus = !$syarat_lulus;

// tampilkan seluruh hasil menggunakan echo
echo "=== DATA MAHASISWA ===<br>";
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