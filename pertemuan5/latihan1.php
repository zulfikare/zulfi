<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin" , "februari" , "rabu");
// cara baru
$bulan = ["januari" , "februari" , "maret"];
$arrl = [123, "tulisan" , false];

// menampilkan array
// var_dump () / print_r()
// var_dump ($hari);
// echo "<br>";
// print_r ($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan [1]

// menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);