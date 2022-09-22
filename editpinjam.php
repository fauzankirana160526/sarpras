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
    <!-- side bar -->
    
    <div class="cont">
        <div class="icon-nbr">
            <h5><iconify-icon icon="bxs:user"></iconify-icon></h5>
            <h4><iconify-icon icon="el:key"></iconify-icon></h4>
        </div>

        <div class="icon-nbr1">
            <a href="datauser.php"><h5>Kelola data siswa</h5></a>
            <a href="peminjaman.php"><h4>Kelola peminjaman</h4></a>
        </div>
    <div class="sbr">
        <form action="updatepinjam.php" method="post">
            <h3>Edit</h3>
        <table>
              <tr>
                <td><p><label>no : </label></p></td>
                <td><input required="required" type="number" value="<?= $pel['no']?>" name="no"></label></p></td>
            </tr>
            <tr>
                <td><p><label>prasarana : </label></p></td>
                <td><input required="required" type="text" value="<?= $pel['prasarana']?>" name="prasarana"></label></p></td>
            </tr>
            <tr>
                <td> <p><label>nama siswa : </label></p></td>
                <td><input required="required" type="text" value="<?= $pel['nama_siswa']?>" name="nama_siswa"></label></p></td>
            </tr>
            <tr>
                <td><p><label>tanggal pinjam : </label></p></td>
                <td><input required="required" type="text" value="<?= $pel['tanggal_pinjam']?>" name="tanggal_pinjam"></label></p></td>
            </tr>
            <tr>
                <td><p><label>status pinjam : </label></p></td>
                <td><input required="required" type="text" value="<?= $pel['status_pinjam']?>" name="status_pinjam"></label></p></td>
            </tr>
            <tr>
                <td><p><label>jumlah : </label></p></td>
                <td><input required="required" type="number" value="<?= $pel['jumlah']?>" name="jumlah"></label></p></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>  
        </table>
            
        </form>
    </div>
</body>
</html>