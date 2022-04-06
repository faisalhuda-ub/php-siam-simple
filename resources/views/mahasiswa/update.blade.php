<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik</title>
</head>
<body>

	<h2>SIAM</h2>
	<h3>Memperbarui data mahasiswa</h3>

	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($mahasiswa as $mhs)
	<form action="/mahasiswa/updatedata" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="nim" value="{{ $mhs->nim }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $mhs->nama }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $mhs->alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>