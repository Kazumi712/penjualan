<?php
include 'koneksi.php';

$id_pelanggan = $_GET ['id_pelanggan'];
$sql ="SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$query =mysqli_query($connect,$sql);
$pel =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>edit data pelanggan</h3>
        <p><label for="">id pelanggan : <input value="<?php echo $pel ['id_pelanggan']?>" required="required" type="hidden" name="id_pelanggan"></label></p>
        <p><label for="">nama pelanggan : <input type="text" name="nama_pelanggan" value="<?php echo $pel ['nama_pelanggan']?>"></label></p>
        <p><label for="">alamat : <textarea name="alamat" cols="30" rows="5"><?php echo $pel ['alamat']?></textarea></label></p>
        <p><label for="">nomor telepon : <input value="<?php echo $pel ['telepon']?>" type="number" name="telepon"></label></p>
        <p><label for="">email : <input value="<?php echo $pel ['email']?>" type="email" name="email"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
    
</body>
</html>
