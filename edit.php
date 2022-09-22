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
    <!-- icon -->
        <div class="icon-nbr1">
            <a href="datauser.php"><h5>Kelola data siswa</h5></a>
            <a href="peminjaman.php"><h4>Kelola peminjaman</h4></a>
        </div>
    <!-- bar -->
    <div class="omv1">
        <form action="update.php" method="post">
            <h3>Edit</h3>
            <table>
                <tr>
                    <td><p><label>no : </label></p></td>
                    <td><p><input required="required" type="number" value="<?= $pel['no']?>" name="no"></p></td>
                </tr>
                <tr>
                    <td><p><label>nisn : </label></td>
                    <td><input required="required" type="number" value="<?= $pel['nisn']?>" name="nisn"></label></p></td></td>
                </tr>
                <tr>
                    <td><p><label>nama lengkap : </label></td>
                    <td><input required="required" type="text" value="<?= $pel['nama_lengkap']?>" name="nama_lengkap"></p></td>
                </tr>
                <tr>
                    <td><p><label>email : </label></td>
                    <td><input required="required" type="email" value="<?= $pel['email']?>" name="email"></label></p></td>
                </tr>
                <tr>
                    <td><p><label>status : </label></td>
                    <td><input required="required" type="text" value="<?= $pel['status']?>" name="status"></label></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
                
            </table>
        </div>
    </form>
</body>
</html>