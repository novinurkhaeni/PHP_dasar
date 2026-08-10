<?php
$user = "John";
// operator ternary
// empty($user) ? (apakah user kosong ?)
// jika iya isi status "anonymous"
// jika tidak isi status dengan "logged in"
$status = empty($user) ? "anonymous" : "logged in";
echo $status . "<br>";

$umur = 17;
echo $umur >= 20? "Dewasa" : "Belum Dewasa";

// NULL COALESCING
// mengecek apakah suatu variabel itu sudah ada atau tidak kosong
$warna = "";
// $warna ?? (apakah variabel warna sudah ada dan ada isinya?)
// jika iya isi template_warna dengan "merah"
// jika tidak isi dengan "biru"
$template_warna = $warna ?? "biru";
echo "<br> $template_warna";
?>