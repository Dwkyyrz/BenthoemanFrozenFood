<?php 
    include '../../koneksi.php';
    $id = $_GET['id'];

    $sql_produk = "SELECT * FROM produk WHERE idproduk = '$id'";
    $data_sql = mysqli_query($koneksi,$sql_produk);
    $d = mysqli_fetch_assoc($data_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>edit produk</p>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $d['idproduk'] ?>" hidden>
        <input type="text" name="foto-lama" value="<?php echo $d['img'] ?>" hidden>
        <img src="img/<?php echo $d['img'] ?>" alt="" width="100px" name="file">
        <p>gambar</p>
        <input type="file" name="file" id=""><br>
        <p>nama</p>
        <input type="text" name="nama_produk" id="" value="<?php echo $d['nama_produk'] ?>"><br>
        <p>harga</p>
        <input type="number" name="harga" id="" value="<?php echo $d['harga'] ?>"><br>
        <p>detail</p>
        <textarea name="detail" id="" cols="30" rows="10"><?php echo $d['detail'] ?></textarea><br>
        <input type="submit" name="tambah" value="tambah" >
    </form>
    
</body>
</html>