<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <p>info produk</p>
    <a href="input-produk.php"><button>input barang</button></a>
    <form action="proses-hapus.php" method="post" onsubmit="return konfirmasi()">
        <input type="submit" value="hapus">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">cek</th> 
                <th scope="col">no</th>
                <th scope="col">gambar</th>
                <th scope="col">nama produk</th>
                <th scope="col">harga</th>
                <th scope="col">detail</th>
                <th scope="col">edit/hapus</th>
                </tr>
            </thead>
            <?php 
                include '../../koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM produk");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tbody>
                <tr>
                <td><input type="checkbox" name="delete[]" value="<?php echo $data['idproduk'] ?>" id=""></td>
                <td scope="row"><?php echo $no++ ?></td>
                <td><img src="img/<?php echo $data['img'] ?>" alt="" width="50px"></td>
                <td><?php echo $data['nama_produk'] ?></td>
                <td>Rp<?php echo $data['harga'] ?></td>
                <td><?php echo $data['detail'] ?></td>
                <td>
                    <a href="edit-produk.php?id=<?php echo $data['idproduk'] ?>" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                </td>
                </tr>
            </tbody>
            <?php }; ?>
        </table>
    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        function konfirmasi(){
            return confirm('apakah anda ingin menghapus data ini?');
        }
    </script>
</body>
</html>