<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

 <?php
    include ("koneksi.php");
    $id_identity = $_GET['id_identity'];

    $query = "select * from identity where id_identity = $id_identity";
    $hasil = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($hasil);
?>

    <h2> Identity Form </h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_identity" value="<?php echo $row['id_identity']; ?>">
        ID    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <input type="text" name="ID" value="<?php echo $row['id_identity']; ?>"><br/><br/>
        Nama    &nbsp; &nbsp; &nbsp;   : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br/><br/>
        Alamat  &nbsp; &nbsp;  : <textarea name="alamat"></textarea><br/><br/>
        Email    &nbsp; &nbsp; &nbsp;  : <input type="text" name="email" value="<?php echo $row['email']; ?>"><br/><br/>
        Birthdate : <input type="text" name="birthdate" value="<?php echo $row['birthdate']; ?>"><br/><br/>
        ID User  &nbsp;   : <input type="text" name="id_user" value="<?php echo $row['id_user']; ?>"><br/><br/>
        <input type="submit" value="save">
</form>
</body>
</html>