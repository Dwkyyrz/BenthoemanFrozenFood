<?php 
  include '../../koneksi.php';
    session_start();
    if($_SESSION['status']!== "login"){
      header("location:../../logout.php");
    }
    if($_SESSION['rule']!== "admin"){
      echo "
        <script> 
          alert('Anda bukan administrator')
          window.location = '../../index.php' 
        </script>";
      // header("location:../../logout.php");
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../src/img/bg2.png">
  <link rel="stylesheet" href="dashboard.css">
  <script src="https://kit.fontawesome.com/3119dd19b3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <h4>Benthoeman</h4>
          <i class="fa-solid fa-xmark" id="close-nav"></i>
        </div>
      </div>
      <div class="toggle">
        <a href="#">
          <i class="fa-solid fa-bars"></i>
        </a>
      </div>
      <div class="sidebar">
        
        <a href="../../admin/dashboard/dashboard.html" class="active">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>
        <a href="../../admin/akun/akun.php" >
          <i class="fa-solid fa-id-badge"></i>
          <span>Akun</span>
        </a>
        <a href="../../admin/klien/klien.html">
          <i class="fa-solid fa-users"></i>
          <span>Klien</span>
        </a>
        <a href="../../admin/produk/produk.html">
          <i class="fa-solid fa-basket-shopping"></i>
          <span>Produk</span>
        </a>
        <a href="../../logout.php">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <span>Logout</span>
        </a>
      </div>
    </aside>

    <div class="topbar">
      
    </div>
  </div>
  
</body>
</html>