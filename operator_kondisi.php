<?php
$user = "John";
// operator ternary ? :
// empty($user) ? (apakah user kosong ?)
// jika iya isi status "anonymous"
// jika tidak isi status dengan "logged in"
$status = empty($user) ? "anonymous" : "logged in";
echo $status . "<br>";

$umur = 25;
echo $umur >= 20? "Dewasa" : "Belum Dewasa";

// NULL COALESCING ??
// mengecek apakah suatu variabel itu sudah dibuat DAN tidak kosong
// $warna = null;
// $warna ?? (apakah variabel warna sudah ada dan ada isinya?)
// jika iya isi template_warna dengan nilai warna
// jika tidak isi dengan "pink"
$template_warna = $warna ?? "pink";
echo "<br> $template_warna";

$sekolah = "MARSA";
echo $sekolah?? "MARONE";
?>