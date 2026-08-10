<?php
// operator logika adalah?

$umur = 18;
$punya_ktp = "iya";

// JIKA KEDUANYA TRUE, HASILNYA TRUE
$boleh_memilih = $umur >= 17 && $punya_ktp == "iya";
var_dump($boleh_memilih);
echo "<br>";

// beri komentar
$nilai_akhir = 80;
$nilai_kehadiran = 70;
$perlu_perhatian = $nilai_akhir >= 75 || $nilai_kehadiran >= 80;
var_dump($perlu_perhatian);
echo "<br>";

// beri komentar
$a = TRUE;
$b = TRUE;
$hasil = ($a xor $b);
var_dump($hasil);
echo "<br>";

// beri komentar
$lulus = TRUE;
$status_lulus = !$lulus;
var_dump($status_lulus);
?>