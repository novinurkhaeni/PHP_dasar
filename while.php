<?php
// mengecek kondisinya dulu, jika sesuai maka perulangan dilakukan
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

echo "<br>";
// kita mau mencetak bilangan genap dan ganjil sejumlah 10 bilangan
$angka = 1;
while ($angka <= 10) {
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan genap <br>";
    } else {
        echo "$angka adalah bilangan ganjil <br>";
    }
    $angka++;
}
