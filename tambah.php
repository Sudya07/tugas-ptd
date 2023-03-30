<?php
require 'function.php';




if (isset($_POST["submit"])) {

	

    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah ($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'ho.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'ho.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<h1>Form Input Data</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label for="gambar">gambar file :</label>
			<input type="file" name="gambar" id="gambar">
		</p>
		<p>
			<label for="judul_buku">judul buku :</label>
			<input type="text" name="judul_buku" id="judul_buku">
		</p>
		<p>
			<label for="penerbit">Penerbit :</label>
			<input type="text" name="penerbit" id="penerbit">
		</p>
		<p>
			<label for="pengarang">Pengarang :</label>
			<input type="text" name="pengarang" id="pengarang">
		</p>
		<p>
			<label for="tahun">tahun rilis :</label>
			<input type="text" name="tahun" id="tahun">
		</p>
		<p>
			<label for="link">link pembelian :</label>
			<input type="text" name="link" id="link">
		</p>
		<input type="submit" value="Tambah Produk" name="submit">
	</form>
</body>
</html>