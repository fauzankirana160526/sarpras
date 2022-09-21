<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css -->
    <style>
        <?php include 'style.css';?>
    </style>
    <!-- iconfity -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</head>
<body>
    <div class="">
        
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
        </div>

    </div>

    <!-- text Data siswa -->
    <div class="txt">
        <h1>Data peminjaman</h1>
        <h2></h2>
        <div class="btm1"><h4><a href="tambahuser.html">create data [+]</a></h4></div>

        <!-- teble -->
    <div class="table1">
        <table border="0">
                    <tr>
                        <th>no</th>
                        <th>nisn</th>
                        <th>nama lengkap</th>
                        <th>email</th>
                        <th>status</th>
                        <th>aksi</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM sarpras";
                        $query = mysqli_query($connect, $sql);
                        while($pel = mysqli_fetch_array($query)){
                            // var_dump($pel);
                            echo"
                        <tr>
                            <td>$pel[no]</td>
                            <td>$pel[nisn]</td>
                            <td>$pel[nama_lengkap]</td>
                            <td>$pel[email]</td>
                            <td>$pel[status]</td>
                            <td>
                                <a href='edit.php?no=".$pel['no']."'>Edit</a>
                                <a href='hapus.php?no=".$pel['no']."'>Hapus</a>
                            </td>
                        </tr>";
                        }
                    ?>
        </table>
    </div>
    </div>

    
    
    
</body>
</html>