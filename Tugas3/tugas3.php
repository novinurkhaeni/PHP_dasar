<?php
// Upload file jawaban di link berikut https://forms.gle/piT3cCNKUJQfGZyN9
// Berikan komentar apa yang error
// SOAL 1 - PRE-INCREMENT. APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$angka = 15;
echo "Soal 1: " . ++$angka . "<br>";


// SOAL 2 - POST-INCREMENT APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$angka = 15;
echo "Soal 2: " . $angka++ . "<br>";


// SOAL 3 - PRE-DECREMENT APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$stok = 20;
echo "Soal 3: " . --$stok . "<br>";


// SOAL 4 - POST-DECREMENT APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$stok = 20;
echo "Soal 4: " . $stok-- . "<br>"; //20
echo "Stok setelah dikurangi: " . $stok . "<br>"; //19


// SOAL 5 - CONCATENATION ASSIGNMENT (.=) APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$nama_depan = "Budi";
$nama_belakang = "Santoso";
echo $nama_depan .= $nama_belakang;
echo "Soal 5: " . $nama_depan . "<br>";


// SOAL 6 - CONCATENATION (.) APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$nama = "Budi";
$kelas = "XI PPLG";
echo "Soal 6: Nama: " . $nama . " - Kelas: " . $kelas . "<br>";


// SOAL 7 - TERNARY APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$nilai = 80;
$status = $nilai >= 75 ? "Lulus" : "Tidak Lulus";
echo "Soal 7: " . $status . "<br>";


// SOAL 8 - TERNARY APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$umur = 18;
$status_umur = $umur >= 17 ? "Dewasa" : "Belum Dewasa";
echo "Soal 8: " . $status_umur . "<br>";


// SOAL 9 - NULL COALESCING APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$username = "null";
$nama_user = $username ?? "Guest";
echo "Soal 9: Selamat datang, " . $nama_user . "<br>";

// SOAL 10 - GABUNGAN OPERATOR APAKAH ADA YANG ERROR? PERBAIKI JIKA ADA!
$angka = 10;
$nama = "Budi";
$nilai = 80;

$angka++;

$nama .= " Santoso";

$status = $nilai >= 75? "Lulus" : "Tidak Lulus";

echo "Soal 10: Nama: " . $nama . "<br>";
echo "Angka: " . $angka . "<br>";
echo "Status: " . $status . "<br>";

?>