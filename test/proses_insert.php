<?php
    include("koneksi.php");

    $id_identity = $_POST['id_identity'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $id_user = $_POST['id_user'];

    $query = "insert into identity values ('$id_identity', '$nama', '$alamat', '$email', '$birthdate', $id_user) ";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    } else{
        header("Location: edit.php?id_identity=$id_identity");
    }
?>