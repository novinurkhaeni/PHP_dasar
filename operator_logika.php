<?php
$umur = 18;
$punya_ktp = "iya";

// logika dan (AND atau &&)
$boleh_memilih = $umur >= 17 && $punya_ktp == "iya";
var_dump($boleh_memilih);
echo "<br>";

// logika or (OR atau ||)
$nilai_akhir = 80;
$nilai_kehadiran = 70;
$perlu_perhatian = $nilai_akhir >= 75 || $nilai_kehadiran >= 80;
var_dump($perlu_perhatian);
echo "<br>";

// logika XOR
$a = TRUE;
$b = TRUE;
// xor tidak akan dibaca jika
// $hasil = $a xor $b;
// hanya membaca $hasil = $a.
// agar xor dibaca, gunakan $hasil = ($a xor $b);
$hasil = ($a xor $b);
var_dump($hasil);
echo "<br>";

// not !
$lulus = TRUE;
$status_lulus = !$lulus;
var_dump($status_lulus);
?>