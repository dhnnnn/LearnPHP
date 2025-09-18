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

    $gambar = upload();
    if(!$gambar){
        return false;
    }
    


    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$gambar', '$nama', '$npm', '$email', '$jurusan')
            ";
    mysqli_query($db, $query);



    return mysqli_affected_rows($db);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    //cek apakah ada gambar yang di upload
    if($error === 4){
        echo "
            <script>
                alert('Pilih gambar yang benar');
            </script>
            ";
        return false;     
    }


    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "
            <script>
                alert('Yang anda upload bukan gambar');
            </script>
            ";
        return false;
    }


    //cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran gambar anda terlalu besar');
            </script>
            ";
        return false;
    }


    //pengecekan gambar siap di upload
    //generate nama ganbar baru
    $angkaRandom = uniqid();
    $namaFileBaru = "$angkaRandom.$ekstensiGambar";



    move_uploaded_file($tmpName, "img/$namaFileBaru");

    return "img/$namaFileBaru";


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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else{
        $gambar = upload();
    }



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