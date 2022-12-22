<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../src/img/bg2.png">
  <link rel="stylesheet" href="akun.css">
  <script src="https://kit.fontawesome.com/3119dd19b3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        
        <a href="../../admin/dashboard/dashboard.html" >
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>
        <a href="../../admin/akun/akun.html" class="active">
          <i class="fa-solid fa-id-badge"></i>
          <span>akun</span>
        </a>
        <a href="../../admin/klien/klien.html">
          <i class="fa-solid fa-users"></i>
          <span>Klien</span>
        </a>
        <a href="../../admin/produk/produk.html">
          <i class="fa-solid fa-basket-shopping"></i>
          <span>Produk</span>
        </a>
        <a href="../../index.html">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <span>Logout</span>
        </a>
      </div>
    </aside>
    
    <div class="konten">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">time</th>
          </tr>
        </thead>
        <?php 
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE rule = 'admin'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td>@<?php echo $data['username'] ?></td>
            <td><?php echo $data['time_stamp'] ?></td>
          </tr>
        </tbody>
        <?php }; ?>
      </table>
    </div>
    
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>