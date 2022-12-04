<?php 
include '../../koneksi.php';
$tabel = $_POST['delete'];

foreach($tabel as $key=>$value){
    $hapus_produk = mysqli_query($koneksi,"DELETE FROM produk WHERE idproduk='".$value."'");
}

if ($hapus_produk){
    echo "
        <script>
            window.location = 'produk.php';
        </script>
    ";
}
else{
    echo "
        <script>
            alert('Gagal menghapus produk');
            window.location = 'produk.php';
        </script>
    ";
    // echo mysqli_error($register);
}
?>