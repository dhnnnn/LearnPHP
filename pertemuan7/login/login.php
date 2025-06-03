<?php
//cek apakah tombol submit tekan atau belum
if( isset($_POST["submit"])){
    //cek username
    if( $_POST["username"] == "admin" && $_POST["password"] == "123"){
        //jika bener, readerect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah, tampilkan kesalahan
        $eror = true;
    }
    
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($eror)) : ?>
        <p>Username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Pasword : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>