<?php 
include 'koneksi.php'; 
 
if(isset($_POST['simpan'])){ 
    $no = $_POST['no']; 
    $nisn = $_POST['nisn']; 
    $nama_lengkap = $_POST['nama_lengkap'];  
    $email = $_POST['email']; 
    $status = $_POST['status']; 
 
    $sql = "INSERT INTO sarpras(no, nisn, nama_lengkap, email, status) VALUES ('$no', '$nisn', '$nama_lengkap', '$email', '$status')"; 
 
    $query = mysqli_query($connect, $sql);
 
    if($query){ 
        header('Location: datauser.php'); 
    }else{ 
        header('Location: simpan.php?status=gagal'); 
    } 
} 
?>
