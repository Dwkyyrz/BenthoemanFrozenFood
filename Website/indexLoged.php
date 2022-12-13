<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benthoeman Frozenfood</title>
  <link rel="stylesheet" href="indexstyleLoged.css">
  <link rel="icon" type="image/x-icon" href="src/img/bg2.png">
</head>

<body>
  <div class="fcontainer">
    <div class="navbar">
      <nav class="navigasi">
        <div class="logo">
          <span id="lg1">Benthoeman</span><br>
          <span id="lg2">Frozenfood</span>
        </div>

        <ul class="menu">
          <li><a>Home</a></li>
          <li><a>About us</a></li>
          <li><a href="card.php">Products</a></li>
          <li><a>Contact</a></li>
        </ul>

        <div class="tools">

          <div class="search">
            <div class="searchIcon">
              <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="searchInput">
              <input type="text" placeholder="Search...">
            </div>
            <div class="close">
              <ion-icon name="close-outline"></ion-icon>
            </div>
          </div>

          <div class="icon">
            <a href="cart.php">
              <svg width="24" height="24" viewBox="0 0 24 24   " fill="black" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5 23C3.34315 23 2 21.6569 2 20C2 18.603 2.95486 17.429 4.24752 17.0952L4.69039 15.7666C3.68249 15.3428 2.94961 14.3834 2.8609 13.2301L2.15634 4.07081C2.10986 3.46658 1.60601 3 1 3C0.447715 3 0 2.55228 0 2C0 1.44772 0.447715 1 1 1C2.65109 1 4.02381 2.27119 4.15045 3.91741L23 3.94461C23.6306 3.94461 24.1038 4.52119 23.9808 5.13969L22.301 13.5852C22.0218 14.989 20.7899 16 19.3586 16H6.72076L6.29044 17.291C7.00909 17.6339 7.56987 18.2544 7.8341 19.0137C7.88806 19.0047 7.94348 19 8 19H16.1707C16.5825 17.8348 17.6938 17 19 17C20.6569 17 22 18.3431 22 20C22 21.6569 20.6569 23 19 23C17.6938 23 16.5825 22.1652 16.1707 21H8C7.94348 21 7.88806 20.9953 7.8341 20.9863C7.42615 22.1586 6.31133 23 5 23ZM4.98355 19.0001C4.43885 19.0089 4 19.4532 4 20C4 20.5523 4.44772 21 5 21C5.55228 21 6 20.5523 6 20C6 19.4533 5.56122 19.009 5.01659 19.0001C5.0056 19.0003 4.99458 19.0003 4.98355 19.0001V19.0001ZM19 21C19.5523 21 20 20.5523 20 20C20 19.4477 19.5523 19 19 19C18.4477 19 18 19.4477 18 20C18 20.5523 18.4477 21 19 21Z" />
              </svg>
            </a>
          </div>

          <div class="user">
            <?php 
              include 'koneksi.php';

              session_start();
              if($_SESSION['status']!== "login"){
                echo "<script>
                        alert('LOGIN DAHULU!!!');
                        window.location = 'registrasi.html';
                      </script>";
                // header("location:registrasi.html");
              }
              
            ?>
            <a href="logout.php">
              <?php echo $_SESSION['username']; ?>
            </a>
          </div>
        </div>
      </nav>
    </div>


    <section class="header-container">
      <div class="banner">
        <div class="text">
          <span>Fresh food,</span>
          <span>For your mood</span>
          <p>Benthoeman frozen food menyediakan aneka ragam makanan beku mulai dari olahan ayam, daging, sayur dan juga
            ikan.</p>
          <!-- <a href="index.html">
            asoas
          </a> -->
        </div>

        <div class="bg1">
          <img src="src/img/bg2.png" alt="">
        </div>
      </div>
      <img id="img1" src="src/img/es.png">
    </section>


    <section class="slogan" id="slogan">
      <img id="img2" src="src/img/es2.png" alt="">
      <div class="slogan-content">
        <div class="card">
          <img src="../Website/src/img/cloche.svg" alt="">
          <h4>FRESH & BERKUALITAS</h4>
          <p>Makanan yang berkualitas dan bergizi tidak mengandung bahan pengawet dan aman untuk dikonsumsi</p>
        </div>
        <div class="card">
          <img src="../Website/src/img/garpu.svg" alt="">
          <h4>SIAP SAJI</h4>
          <p>Makanan yang berkualitas dan bergizi tidak mengandung bahan pengawet dan aman untuk dikonsumsi</p>
        </div>
        <div class="card">
          <img src="../Website/src/img/delivery.svg" alt="">
          <h4>PENGIRIMAN CEPAT</h4>
          <p>Makanan yang berkualitas dan bergizi tidak mengandung bahan pengawet dan aman untuk dikonsumsi</p>
        </div>
      </div>
    </section>

    <section class="about-us">
      <h1>ABOUT US</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis perferendis ipsum, temporibus saepe et dolor maxime, magnam atque odit rerum dolores dolore similique quisquam quam porro alias explicabo at cum officiis ab modi. Vitae natus aperiam neque facilis asperiores atque! Earum eligendi vero consectetur nisi. Nisi cumque voluptate non pariatur, et eligendi qui necessitatibus placeat excepturi recusandae quas eum, aut nobis repellendus? Suscipit ullam doloribus nemo blanditiis quas, fugit voluptatibus fugiat fuga tempore sunt optio sint obcaecati qui error sapiente eos quae, ab voluptas dignissimos similique at minima. Nihil, eveniet assumenda! Commodi aliquid ipsum sint ex impedit, voluptatum odit officia.</p>
    </section>

    <section class="produk">

    </section>

    <section class="bottom">
      <div class="teks">
        <h1>BISA PESAN MELALUI MOBILE APPS</h1>
        <p>Tersedia juga pemesanan produk frozen food Benthoeman melalui mobile apps Android yang dapat anda pesan secara mudah</p>
      </div>
      <div class="ornamen">
        <div class="slice"></div>
        <div class="bottom-bot"></div>
      </div>
    </section>
  </div>


  <!-- Search -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- End Search -->
  <!-- SearchQuery-->
  <script>
    let searchIcon = document.querySelector('.searchIcon');
    let search = document.querySelector('.search');
    let close = document.querySelector('.close');

    searchIcon.onclick = function () {
      search.classList.add('search-active');
    }
    close.onclick = function () {
      search.classList.remove('search-active');
    }
  </script>
  <!-- End SearchQuery-->
</body>

</html>