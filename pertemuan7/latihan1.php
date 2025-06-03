<?php

// //Variable Scope / lingkungan variable
// $x = 5;

// function tampilX() {
//     global $x; //mencari variable di seluruh lingkup
//     echo $x;
// }

// tampilX();

//===================
//SuperGlobals
//$_GET

$mahasiswa = [
    [
    "nama" => "Dhani Dwi Putra",
    "npm" => "87123601",
    "jurusan" => "Teknik informatika",
    "email" => "dhanidwiputra@gmail.com" 
    ],
    [
    "nama" => "Robiatul Maulidah",
    "npm" => "252678345",
    "jurusan" => "Farmaasi",
    "email" => "robiatul@gmail.com" 
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>"><?= $mhs["nama"]; ?></a>
            </li> 
        <?php endforeach; ?>
    </ul>
</body>
</html>