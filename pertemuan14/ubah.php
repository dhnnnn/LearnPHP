<?php
require 'functions.php';

//mengambil data di url
$id = $_GET["id"];


//query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil di tambahkan
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
};


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

    <ul>
        <li>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" id="npm" require value="<?= $mhs["npm"]; ?>">
        </li>

        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" require value="<?= $mhs["nama"]; ?>">
        </li>

        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" require value="<?= $mhs["email"]; ?>">
        </li>

        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" require value="<?= $mhs["jurusan"]; ?>">
        </li>

        <li>
            <label for="gambar">Gambar : </label><br>
            <img src="<?= $mhs['gambar']; ?>" width="60"><br>
            <input type="file" name="gambar" id="gambar" require>
        </li>

        <br>

        <li>
            <button type="submit" name="submit">Ubah data</button>
        </li>
    </ul>

    </form>
</body>
</html>