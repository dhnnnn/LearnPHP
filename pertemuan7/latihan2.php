<?php
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"])){
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>