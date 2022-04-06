<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>SIAM</h2>
	<h3>Data mahasiswa</h3>

	<a href="/mahasiswa/add"> + Data Mahasiwa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{ $mhs->nim }}</td>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->alamat }}</td>
			<td>
				<a href="/mahasiswa/update/{{ $mhs->nim}}">Ubah</a>
				|
				<a href="/mahasiswa/delete/{{ $mhs->nim }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>