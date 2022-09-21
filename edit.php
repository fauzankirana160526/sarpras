<?php
include 'koneksi.php';

$no = $_GET['no'];
$sql = "SELECT * FROM sarpras WHERE no='$no'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows ($query)< 1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <form action="update.php" method="post">
        <h3>Tambha Data pelanggan</h3>
        <p><label>no : <input required="required" type="number" value="<?= $pel['no']?>" name="no"></label></p>
        <p><label>nisn : <input required="required" type="number" value="<?= $pel['nisn']?>" name="nisn"></label></p>
        <p><label>nama lengkap : <input required="required" type="text" value="<?= $pel['nama_lengkap']?>" name="nama_lengkap"></p>
        <p><label>email : <input required="required" type="email" value="<?= $pel['email']?>" name="email"></label></p>
        <p><label>status : <input required="required" type="text" value="<?= $pel['status']?>" name="status"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>