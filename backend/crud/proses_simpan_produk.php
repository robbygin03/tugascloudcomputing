<?php

include "koneksi.php";
$kode = $_POST ['kode_produk'];
$namaprod = $_POST ['nama'];
$deskrip = $_POST ['description'];
$foto = $_FILES ['foto']['name'];
$lokasifoto = $_FILES ['foto']['tmp_name'];

move_uploaded_file($lokasifoto, "foto/$foto");
$query = "INSERT into table_product values('','$kode','$namaprod','$deskrip','$foto')";
$perintah = mysqli_query($db, $query);
if ($perintah) {
   echo "<script>
   alert('Berhasil Disimpan');
   window.location='list-produk.php';
   </script>"
   ;

}

else {
    echo "<script>
    alert('Gagal Disimpan');
    window.location='list-produk.php';
    </script>"
    ;
 
 }
