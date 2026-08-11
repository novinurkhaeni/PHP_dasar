<?php

// 1. Konstanta
define("BATAS_LULUS", 75);
define("MIN_KEHADIRAN", 80);

// 2. Variabel
$nama = "Fajriskyy";
$nilai_tugas = 85;
$nilai_uts = 78;
$nilai_uas = 90;
$kehadiran = 85;

// 3. Hitung nilai akhir
$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

// 4. Hitung total nilai menggunakan operator +=
$total_nilai = 0;
$total_nilai += $nilai_tugas;
$total_nilai += $nilai_uts;
$total_nilai += $nilai_uas;

// 5. Operator perbandingan
$nilai_lulus = $nilai_akhir >= BATAS_LULUS;
$kehadiran_cukup = $kehadiran >= MIN_KEHADIRAN;

// 6. Operator logika &&
// Sesuai soal: nilai_lulus = TRUE dan kehadiran_cukup = FALSE
$syarat_lulus = $nilai_lulus && !$kehadiran_cukup; //harusnya $kehadiran cukup jangan di not

// 7. Operator logika ||
$perlu_perhatian = ($nilai_akhir < BATAS_LULUS) || ($kehadiran < MIN_KEHADIRAN);

// 8. Operator logika !
$tidak_lulus = !$nilai_lulus;

// 9. Tampilkan hasil
echo "Nama: $nama <br>";
echo "Nilai Tugas: $nilai_tugas <br>";
echo "Nilai UTS: $nilai_uts <br>";
echo "Nilai UAS: $nilai_uas <br>";
echo "Kehadiran: $kehadiran% <br><br>";

echo "Nilai Akhir: $nilai_akhir <br>";
echo "Total Nilai: $total_nilai <br><br>";

echo "Nilai Lulus: " . ($nilai_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Kehadiran Cukup: " . ($kehadiran_cukup ? "TRUE" : "FALSE") . "<br>";
echo "Syarat Lulus: " . ($syarat_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Perlu Perhatian: " . ($perlu_perhatian ? "TRUE" : "FALSE") . "<br>";
echo "Tidak Lulus: " . ($tidak_lulus ? "TRUE" : "FALSE") . "<br>";

?>