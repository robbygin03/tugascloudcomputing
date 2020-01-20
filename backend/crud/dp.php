<?php 
include 'koneksi.php';

$idi = $_GET['id'];

$query = "DELETE FROM table_product WHERE id='$idi'";

$perintah = mysqli_query($db, $query);
if ($perintah) {
   echo "<script>
   alert('Berhasil Dihapus');
   window.location='list-produk.php';
   </script>"
   ;

}

else {
    echo "<script>
    alert('Gagal Dihapus');
    window.location='list-produk.php';
    </script>"
    ;
 
 }


 ?>