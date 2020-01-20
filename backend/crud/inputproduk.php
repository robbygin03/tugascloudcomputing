<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="proses_simpan_produk.php" method="POST" enctype="multipart/form-data">
    <p>
        Kode Produk : <br>
        <input type="text" name="kode_produk" id="">
    </p>

    <p>
        Nama Produk : <br>
        <input type="text" name="nama" id="">
    </p>

    <p>
        Deskripsi Produk : <br>
        <textarea name="description"></textarea>
    </p>

    <p>
        Foto : <br>
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