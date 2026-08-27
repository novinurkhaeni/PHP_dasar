<?php
$siswa = ["desti", "vivin", "meishyn", "syifa", "fina"];
foreach ($siswa as $item) {
    echo $item . "<br>";
}

// foreach array asosiative
$biodata = array(
    "nama" => "Asep",
    "umur" => 17,
    "sekolah" => "Marsa",
    "alamat" => "Kebumen"
);
foreach ($biodata as $key => $value) {
    echo "$key : $value <br>";
}

// array multidimensi
$siswa = [
    [
        "nama" => "Andi",
        "nilai" => 80
    ],
    [
        "nama" => "Mia",
        "nilai" => 90
    ]
];
foreach($siswa as $item) {
    echo "Nama: " . $item['nama'] . " Nilai: " . $item['nilai'] ."<br>";
}
