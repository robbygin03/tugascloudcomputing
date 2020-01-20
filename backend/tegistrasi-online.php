<h3>Biodata Siswa</h3>
<?php 
	$nami = $_POST['nama'];
	$address = $_POST['alamat'];
	$jenkel = $_POST['jekel'];
	$pendidikan_akhir = $_POST['petek'];
	echo "

	<pre>
	<p>
		Nama                : $nami
		Alamat              : $address
		Jenis Kelamin       : $jenkel
		Pendidikan Terakhir : $pendidikan_akhir
	</p>
	</pre>

	";


 ?>
 <p>
 	Apakah data ini benar??? Jika belum, silahkan
 	<a href="register.html">KLIK DI SINI</a>
 </p>