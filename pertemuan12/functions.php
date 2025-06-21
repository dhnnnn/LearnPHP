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

    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    //apload gambar
    $gambar = upload();
    if(!gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$npm', '$email', '$jurusan')
            ";
    mysqli_query($db, $query);



    return mysqli_affected_rows($db);
}

function upload(){
    
    $nameFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    //cek apakah ada gambar yang di upload
    if($error === 4) {
        echo "
            <script>
                alert('Pilih gambar terlebih dhaulu');
            </script>
            ";
        return false;
    }
}


function hapus($id) {
    global $db;

    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE mahasiswa SET 
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan'

            WHERE id = $id
            ";
    mysqli_query($db, $query);



    return mysqli_affected_rows($db);
}

function cari($key){
    $query = "SELECT * FROM mahasiswa
                WHERE
             nama LIKE '%$key%' OR
             email LIKE '%$key%' OR
             npm LIKE '%$key%' OR
             jurusan LIKE '%$key%'
        ";
    return query($query);
}


?>