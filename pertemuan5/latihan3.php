<?php

$mahasiswa= [
    ["Dhani", "09123810", "Teknik Informatika", "dhanidwi@email.com"],
    ["Mada", "09934223810", "Teknik Informatika", "mada@email.com"]
    ["Rbiatul", "02394223810", "Teknik Informatika", "robiatul@email.com"]
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $maha) : ?>

    <ul>
        <li>Nama : <?= $maha[0]; ?></li>
        <li>NPM : <?= $maha[1]; ?></li>
        <li>Jurusan : <?= $maha[2]; ?></li>
        <li>Email : <?= $maha[3]; ?></li>
    </ul>
        
<?php endforeach; ?>

</body>
</html>