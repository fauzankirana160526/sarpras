<?php 
include 'koneksi.php';
 
if(isset($_POST['simpan'])){ 
    $no= $_POST['no']; 
    $prasarana = $_POST['prasarana']; 
    $nama_siswa = $_POST['nama_siswa'];  
    $tanggal_pinjam = $_POST['tanggal_pinjam']; 
    $status_pinjam = $_POST['status_pinjam'];
    $jumlah = $_POST['jumlah']; 
 
    $sql = "UPDATE `siswa` SET no='$no', prasarana ='$prasarana', nama_siswa ='$nama_siswa', tanggal_pinjam ='$tanggal_pinjam', status_pinjam='$status_pinjam', jumlah ='$jumlah' WHERE no = '$no'";
 
    $query = mysqli_query($connect, $sql);
 
    if($query){ 
        header('Location: peminjaman.php'); 
    }else{ 
        header('Location: updatepeminjam.php?status=gagal'); 
    } 
}
?>
