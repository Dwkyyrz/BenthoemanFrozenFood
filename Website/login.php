<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

$admin = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' AND rule='admin'");
$adm_cek = mysqli_num_rows($admin);

if ($adm_cek > 0) {
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:../Website/admin/dashboard/dashboard.html");
}
else if ($cek > 0) {
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