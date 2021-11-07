<?php

    include("koneksi.php");

    $id_identity = $_POST['id_identity'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $id_user = $_POST['id_user'];

    $query = "update identity set nama = '$nama', alamat = '$alamat', email = '$email', birthdate = '$birthdate', id_user = '$id_user' where id_identity = $id_identity";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    } else{
        header("Location: edit.php?id_identity=$id_identity");
    }
?>