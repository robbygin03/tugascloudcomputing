<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM table_product";
        $per = mysqli_query($db, $query);
        $i = 1;
        while ($data = mysqli_fetch_array($per))
        {
            $id = $data ['id'];
            $code = $data['kode_produk'];
            $nm = $data['nama'];
            $desk = $data['description'];
            $images = $data['foto'];

            echo "<tr>
                        <td>$i</td>
                        <td>$code</td>
                        <td>$nm</td>
                        <td>$desk</td>
                        <td><img src='foto/$images' width='50px' height='50px'</td>
                        <td><a href='formedit.php?id=$id'><button>Edit</button></a>
                        <a href='dp.php?id=$id'><button>Hapus</button></a></td>
                    </tr>
                    ";
            $i++;
        }
        ?>
    </table>
</body>

</html>