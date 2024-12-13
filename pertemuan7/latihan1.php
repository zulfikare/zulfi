<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "adzando",
    "nrp" => "043040022",
    "email" => "adzando@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "adzando.jpg"
    ],
    [
        "nama" => "saskia",
        "nrp" => "043040023",
        "email" => "saski@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "saskia.jpg"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>