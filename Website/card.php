<?php 
    include 'koneksi.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="card.css">
    <title>Document</title>
</head>
<body>


<div class="container text-center">
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
    <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($data = mysqli_fetch_array($query)) {
        ?>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="./admin/produk/img/<?= $data['img']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['nama_produk'] ?></h5>
            <p class="card-text"><?= $data['detail'] ?></p>
            
            <form action="proses-cart.php" method="post">
                <div class="container text-center">
                    <div class="row row-cols-2">
                        <div class="col">
                            <input type="text" name="iduser" value="<?= $_SESSION['id']?>" class="form-control jumlah" id="" hidden>
                            <input type="text" name="idproduk" value="<?= $data['idproduk']?>" class="form-control jumlah" id="" hidden>
                            <input type="number" name="jumlah" value="1" class="form-control jumlah" id="">
                        </div>
                        <div class="col">
                            <button class="btn btn-dark"><i class="fa-sharp fa-solid fa-cart-shopping"></i></button>
                        </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <?php };?>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>