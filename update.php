<?php 
include 'koneksi.php';
 
if(isset($_POST['simpan'])){ 
    $no= $_POST['no']; 
    $nisn = $_POST['nisn']; 
    $nama_lengkap = $_POST['nama_lengkap'];  
    $email = $_POST['email']; 
    $status = $_POST['status']; 
 
    $sql = "UPDATE sarpras SET nisn ='$nisn', nama_lengkap ='$nama_lengkap', email ='$email', status ='$status' WHERE no ='$no'";
 
    $query = mysqli_query($connect, $sql);
 
    if($query){ 
        header('Location: datauser.php'); 
    }else{ 
        header('Location: update.php?status=gagal'); 
    } 
}
?>
