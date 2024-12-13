<?php
//$mahasiswa = [
   // ["zulfi", "042272356", "rekayasa perangkat lunak", "ilmizulfi7@gmail.com"],
//];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nama" => "zulfi",
    "nrp" => "042272356",
    "email" => "ilmizulfi7@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "kamboja.jpg"
],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>
            <img src="img/kamboja.jpg" width="200px">
        <li>nama:<? $mhs ["nama"] ;?></li>
        <li>NRP:<? $mhs ["nis"] ;?></li>
        <li>jurusan:<? $mhs ["juransan"] ;?></li>
        <li>email:<? $mhs ["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html>