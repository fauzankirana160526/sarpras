<?php 
include 'koneksi.php'; 
 
if(isset($_POST['simpan'])){ 
    $no = $_POST['no']; 
    $prasarana = $_POST['prasarana']; 
    $nama_siswa = $_POST['nama_siswa'];  
    $tanggal_pinjam = $_POST['tanggal_pinjam']; 
    $status_pinjam = $_POST['status_pinjam'];
    $jumlah = $_POST['jumlah']; 
 
    $sql = "INSERT INTO siswa VALUES ('$no', '$prasarana', '$nama_siswa', '$tanggal_pinjam', '$status_pinjam', '$jumlah')"; 
 
    $query = mysqli_query($connect, $sql);
 
    if($query){ 
        header('Location: peminjaman.php'); 
    }else{ 
        header('Location: simpanpinjam.php?status=gagal'); 
    } 
} 