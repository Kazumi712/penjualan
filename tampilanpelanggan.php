<?php
    include 'koneksi.php'; //memanggil file koneksi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>
    <h3>Data Pelanggan</h3>
    <h4><a href="pelanggan.html">{+} Tambah Baru</a></h4>
    <table border="1">
        <tr>
            <th>id pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Action</th>
        <tr>
        <?php
        $sql = "SELECT * FROM pelanggan";
        $query = mysqli_query($connect,$sql);
        while($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
             <td>$pel[id_pelanggan]</td>
             <td>$pel[nama_pelanggan]</td>
             <td>$pel[alamat]</td>
             <td>$pel[telepon]</td>
             <td>$pel[email]</td>
             <td>
                <a href='formedit.php?id_pelanggan=".$pel['id_pelanggan']."'>Edit</a>
                <a href='hapus.php?id_pelanggan=".$pel['id_pelanggan']."'>hapus</a>
            </td>
        </tr>"; 
        }
?>         
    
</body>
</html>
    