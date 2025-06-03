<?php 
// $mahasiswa = [
//     ["dhani dwi putra", "08918231687", "Teknik informatika", "dhaidwiputra@gmail.com"],
//     ["Robiatul", "981287318912", "Farmasi", "robiatul@gmailcom"], 

// ]

//array asociatevie
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Dhani Dwi Putra",
    "npm" => "87123601",
    "jurusan" => "Teknik informatika",
    "email" => "dhanidwiputra@gmail.com" 
    ],
    [
    "nama" => "Robiatul",
    "npm" => "252678345",
    "jurusan" => "Farmaasi",
    "email" => "robiatul@gmail.com" 
    ],
];


// memanggil array di dalam array
// echo $mahasiswa[1]["jurusan"]



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar $mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>


    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama : <?= $mhs["nama"]?></li>
        <li>NPM : <?= $mhs["npm"]?></li>
        <li>Jurusan : <?= $mhs["jurusan"]?></li>
        <li>Email : <?= $mhs["email"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>