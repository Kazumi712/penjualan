<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampilpelanggan.php');
}

 $id_pel  =$_GET ['id_pelanggan'];
 
 $sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pel'";
 $query = mysqli_query($connect, $sql);

 if ($query) {
    header('Location: tampilanpelanggan.php');
 }else{
    header('Location: hapus.php?status=gagal');
 }
 ?>


