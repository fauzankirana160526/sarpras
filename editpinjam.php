<?php
include 'koneksi.php';

$no = $_GET['no'];
$sql = "SELECT * FROM siswa WHERE no='$no'";
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
    <style>
        <?php include 'style.css'?>
    </style>
</head>
<body>
    <form action="updatepinjam.php" method="post">
        <h3>Tambha Data pelanggan</h3>
        <p><label>no : <input required="required" type="number" value="<?= $pel['no']?>" name="no"></label></p>
        <p><label>prasarana : <input required="required" type="text" value="<?= $pel['prasarana']?>" name="prasarana"></label></p>
        <p><label>nama siswa : <input required="required" type="text" value="<?= $pel['nama_siswa']?>" name="nama_siswa"></label></p>
        <p><label>tanggal pinjam : <input required="required" type="text" value="<?= $pel['tanggal_pinjam']?>" name="tanggal_pinjam"></label></p>
        <p><label>status pinjam : <input required="required" type="text" value="<?= $pel['status_pinjam']?>" name="status_pinjam"></label></p>
        <p><label>jumlah : <input required="required" type="number" value="<?= $pel['jumlah']?>" name="jumlah"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>