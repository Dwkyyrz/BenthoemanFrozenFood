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
    <link rel="stylesheet" href="cart.css">
    <link rel="icon" type="image/x-icon" href="src/img/bg2.png">
    <script src="https://kit.fontawesome.com/3119dd19b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
<div class="fcontainer">

    <nav>
      <div class="logo">
        <span id="lg1">Benthoeman</span><br>
        <span id="lg2">Frozenfood</span>
      </div>

      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="./card.php">Products </a></li>
        <li><a href="#">Contact</a></li>
      </ul>


      <ul>
        <li>
          <div class="cart">
            <a href="cart.php">
              <svg width="24" height="24" viewBox="0 0 24 24   " fill="black" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5 23C3.34315 23 2 21.6569 2 20C2 18.603 2.95486 17.429 4.24752 17.0952L4.69039 15.7666C3.68249 15.3428 2.94961 14.3834 2.8609 13.2301L2.15634 4.07081C2.10986 3.46658 1.60601 3 1 3C0.447715 3 0 2.55228 0 2C0 1.44772 0.447715 1 1 1C2.65109 1 4.02381 2.27119 4.15045 3.91741L23 3.94461C23.6306 3.94461 24.1038 4.52119 23.9808 5.13969L22.301 13.5852C22.0218 14.989 20.7899 16 19.3586 16H6.72076L6.29044 17.291C7.00909 17.6339 7.56987 18.2544 7.8341 19.0137C7.88806 19.0047 7.94348 19 8 19H16.1707C16.5825 17.8348 17.6938 17 19 17C20.6569 17 22 18.3431 22 20C22 21.6569 20.6569 23 19 23C17.6938 23 16.5825 22.1652 16.1707 21H8C7.94348 21 7.88806 20.9953 7.8341 20.9863C7.42615 22.1586 6.31133 23 5 23ZM4.98355 19.0001C4.43885 19.0089 4 19.4532 4 20C4 20.5523 4.44772 21 5 21C5.55228 21 6 20.5523 6 20C6 19.4533 5.56122 19.009 5.01659 19.0001C5.0056 19.0003 4.99458 19.0003 4.98355 19.0001V19.0001ZM19 21C19.5523 21 20 20.5523 20 20C20 19.4477 19.5523 19 19 19C18.4477 19 18 19.4477 18 20C18 20.5523 18.4477 21 19 21Z" />
              </svg>
            </a>
          </div>
        </li>

        <li class="profile">

          <a href="#" class="profile-btn">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="24"
              height="24">
              <path d="M16.043,14H7.957A4.963,4.963,0,0,0,3,18.957V24H21V18.957A4.963,4.963,0,0,0,16.043,14Z" />
              <circle cx="12" cy="6" r="6" />
            </svg>
          </a>

          <div class="profile-content">
            <a class="user">
              <div class="img-profile">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="24"
                  height="24">
                  <path d="M16.043,14H7.957A4.963,4.963,0,0,0,3,18.957V24H21V18.957A4.963,4.963,0,0,0,16.043,14Z" />
                  <circle cx="12" cy="6" r="6" />
                </svg>
              </div>
              <span>
                <?php 
                  echo $_SESSION['username'];
                ?>
              </span>
            </a>
            <hr>
            <a href="#" class="akun">
              <i class="fa-solid fa-house"></i>
              <span>My Account</span>
            </a>
            <a href="#" class="akun">
              <i class="fa-solid fa-gear"></i>
              <span>Settings</span>
            </a>
            <a href="logout.php" class="akun">
              <i class="fa-solid fa-right-from-bracket"></i>
              <span>Log out</span>
            </a>
          </div>  
        </li>
      </ul>
    </nav>
    <div class="container text-center">
    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-2">
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
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>