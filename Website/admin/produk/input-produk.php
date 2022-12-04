<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>tambah produk</p>
    <form action="proses-input.php" method="POST" enctype="multipart/form-data">
        <p>gambar</p>
        <input type="file" name="file" id=""><br>
        <p>nama</p>
        <input type="text" name="nama" id=""><br>
        <p>harga</p>
        <input type="number" name="harga" id=""><br>
        <p>detail</p>
        <textarea name="detail" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="tambah" value="tambah" >
    </form>
    
</body>
</html>