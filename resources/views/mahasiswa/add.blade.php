<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik</title>
</head>
<body>

	<h2>SIAM</h2>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/mahasiswa/adddata" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>