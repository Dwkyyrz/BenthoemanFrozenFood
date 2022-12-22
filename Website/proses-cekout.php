<?php 
include 'koneksi.php';
$id = $_POST['id'];

foreach($id as $key=>$value){
    $update_cart = mysqli_query($koneksi,"UPDATE cart SET status='CEKOUT' WHERE id='".$value."'");
}

if ($update_cart){
    echo "
        <script>
            alert('Berhasil Cekout Produk silahkan bayar melalui Whatsapp');
            window.location = 'index.php';
        </script>
    ";
}
else{
    echo "
        <script>
        alert('Gagal Cekout produk');
        window.location = 'cart.php';
        </script>
    ";
    // echo mysqli_error($register);
}
?>