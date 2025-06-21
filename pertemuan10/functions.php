<?php 
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $db;
    $nama = $_data["nama"];
    $npm = $_data["npm"];
    $email = $_data["email"];
    $jurusan = $_data["jurusan"];

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$npm', '$email', '$jurusan')
            ";
    mysqli_query($connnn, $query);



    return mysqli_affected_rows($db);
}
?>