<?php
// ==========================================
// 1. OPERATOR ARITMATIKA
// ==========================================
$x = 10;
$y = 3;

$penjumlahan = $x + $y; // Menjumlahkan nilai
echo "Penjumlahan: " . $penjumlahan . "<br>";

$pengurangan = $x - $y; // Mengurangkan nilai
echo "Pengurangan: " . $pengurangan . "<br>";

$perkalian = $x * $y; // Mengalikan nilai
echo "Perkalian: " . $perkalian . "<br>";

$pembagian = $x / $y; // Membagi nilai
echo "Pembagian: ";
printf("%.2f", $pembagian); // Format 2 angka desimal

$modulus = $x % $y; // Sisa hasil bagi
echo "<br>Modulus: " . $modulus . "<br>";

$pangkat = $x ** $y; // Perpangkatan
echo "Pangkat: " . $pangkat . "<br><hr>";


// ==========================================
// 2. OPERATOR PENUGASAN
// ==========================================
$x = 10; // Mengisi nilai awal x
echo "Nilai x awal = $x <br>";

$x += 5; // Menambahkan 5
echo "Nilai x += 5 adalah $x <br>";

$x -= 3; // Mengurangi 3
echo "Nilai x -= 3 adalah $x <br>";

$x *= 2; // Mengalikan 2
echo "Nilai x *= 2 adalah $x <br>";

$x /= 4; // Membagi 4
echo "Nilai x /= 4 adalah $x <br>";

$x %= 5; // Sisa bagi 5
echo "Nilai x %= 5 adalah $x <br><hr>";


// ==========================================
// 3. OPERATOR PERBANDINGAN
// ==========================================
$x = 100;
$y = '100';

var_dump($x == $y); // Cek nilai sama (tipe data diabaikan)
echo "<br>";

var_dump($x === $y); // Cek identik (nilai & tipe data harus sama)
echo "<br>";

var_dump($x != $y); // Cek tidak sama
echo "<br>";
var_dump($x <> $y); // Cek tidak sama (alternatif)
echo "<br>";

var_dump($x !== $y); // Cek tidak identik
echo "<br>";

$x = 50;
$y = 70;
var_dump($x > $y); // Cek lebih besar dari
echo "<br>";

var_dump($x < $y); // Cek kurang dari
echo "<br>";

$x = 50;
$y = 50;
var_dump($x >= $y); // Cek lebih besar / sama dengan
echo "<br>";

var_dump($x <= $y); // Cek kurang / sama dengan
echo "<br><hr>";


// ==========================================
// 4. OPERATOR LOGIKA
// ==========================================
$umur = 18;
$punya_ktp = "iya";

$boleh_memilih = $umur >= 17 && $punya_ktp == "iya"; // Logika AND (semua syarat harus benar)
var_dump($boleh_memilih);
echo "<br>";

$nilai_akhir = 80;
$nilai_kehadiran = 70;
$perlu_perhatian = $nilai_akhir >= 75 || $nilai_kehadiran >= 80; // Logika OR (salah satu syarat benar)
var_dump($perlu_perhatian);
echo "<br>";

$a = TRUE;
$b = TRUE;
$hasil = ($a xor $b); // Logika XOR (salah satu true, tapi tidak keduanya)
var_dump($hasil);
echo "<br>";

$lulus = TRUE;
$status_lulus = !$lulus; // Logika NOT (membalikkan nilai boolean)
var_dump($status_lulus);
?>