<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php
include "koneksi.php";
$edi = $_GET['id'];
$query = "SELECT * FROM table_product WHERE id='$edi'";
$perintah = mysqli_query($db, $query);
//var_dump($query);
//var_dump($perintah);
$data = mysqli_fetch_array($perintah);
$id = $data['id'];
$code = $data['kode_produk'];
$nm = $data['nama'];
$desc = $data['description'];
$image = $data['foto'];
?>

<body>
    <form action="proses_simpan_produk.php" method="POST" enctype="multipart/form-data">
    <p>
        Kode Produk : <br>
        <input type="text" name="kode_produk" id="" value="<?php echo $code ?>">
    </p>

    <p>
        Nama Produk : <br>
        <input type="text" name="nama" id="" value="<?php echo $nm ?>">
    </p>

    <p>
        Deskripsi Produk : <br>
        <textarea name="description"><?php echo $desc ?></textarea>
    </p>

    <p>
        Foto : <br>
        <img src="foto/<?php echo $image ?>" alt="" width="50px" height="50px">
        <input type="file" name="foto" id="">
    </p>

    <p>
        <input type="reset" name="Reset" id="">
    </p>

    <p>
        <input type="submit" name="Simpan" id="">
    </p>
</form>
</body>

</html>