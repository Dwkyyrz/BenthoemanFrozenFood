<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

$nama = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$cek_nama = mysqli_num_rows($nama);
if ($cek > 0) {
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:tes.php");
}
else if ($username=="" && $password== md5("")) {
  echo "<script> 
  alert('Login gagal! Pastikan Username dan Password tidak kosong')
  window.location = 'registrasi.html' </script>";
}
else if ($username=="") {
  echo "<script> 
  alert('Login gagal! Pastikan Username tidak kosong')
  window.location = 'registrasi.html' </script>";
}
else if ($password== md5("")) {
  echo "<script> 
  alert('Login gagal! Pastikan Password tidak kosong')
  window.location = 'registrasi.html' </script>";
}
else {
  echo "<script> 
            alert('Login gagal! Pastikan Username dan Password benar!')
            window.location = 'registrasi.html' 
        </script>";
  // header("location:registrasi.html");
}
?>