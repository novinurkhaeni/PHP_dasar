<?php

define("BATAS_LULUS", 75);
define("MIN_KEHADIRAN", 80);

$nama = "Ma'ruf Amin Alfauzi";
$nilai_tugas = 80;
$nilai_uts = 75;
$nilai_uas = 85;
$kehadiran = 85;

$nilai_akhir = ($nilai_tugas * 0.3) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);

$total_nilai = 0;
$total_nilai += $nilai_tugas;
$total_nilai += $nilai_uts;
$total_nilai += $nilai_uas;

$nilai_lulus = $nilai_akhir >= BATAS_LULUS;
$kehadiran_cukup = $kehadiran >= MIN_KEHADIRAN;

$syarat_lulus = ($nilai_lulus == true) && ($kehadiran_cukup == false);

$perlu_perhatian = ($nilai_akhir < 75) || ($kehadiran < 80);

$tidak_lulus = !$syarat_lulus;

echo "Nama Siswa: " . $nama . "<br>";
echo "Nilai Tugas: " . $nilai_tugas . "<br>";
echo "Nilai UTS: " . $nilai_uts . "<br>";
echo "Nilai UAS: " . $nilai_uas . "<br>";
echo "Kehadiran: " . $kehadiran . "%<br>";
echo "<hr>";

echo "Total Nilai (Penjumlahan +=): " . $total_nilai . "<br>";
echo "Nilai Akhir (Berbobot): " . $nilai_akhir . "<br>";
echo "<hr>";

echo "Nilai Lulus (>= 75): " . ($nilai_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Kehadiran Cukup (>= 80): " . ($kehadiran_cukup ? "TRUE" : "FALSE") . "<br>";
echo "Syarat Lulus (Logika &&): " . ($syarat_lulus ? "TRUE" : "FALSE") . "<br>";
echo "Perlu Perhatian (Logika ||): " . ($perlu_perhatian ? "TRUE" : "FALSE") . "<br>";
echo "Tidak Lulus (Logika !): " . ($tidak_lulus ? "TRUE" : "FALSE") . "<br>";

?>