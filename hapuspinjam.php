<?php 
include 'koneksi.php'; 
 
if(isset($_GET['no'])){ 
    $no = $_GET['no']; 
 
    $sql = "DELETE FROM siswa WHERE no = '$no'";        
 
    $query = mysqli_query($connect, $sql);
 
    if($query){ 
        header('Location: peminjaman.php'); 
    }else{ 
        header('Location: hapuspinjam.php?status=gagal'); 
    } 
} 
?>
