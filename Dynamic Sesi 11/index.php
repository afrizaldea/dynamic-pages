<html>
<head>
	<title>Pasien - Deaafrizal</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<!--Navigation Bar-->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">SANTOYUSUP</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</nav>
	<div class="container">
	<!--Navigation Bar-->
	<h1>Daftarkan Pasien</h1>
	<form method="post" action="save_data.php">
		<div class="from-group">
			<label for="no_medical">
				No
			</label>
			<input type="text" class="form-control" name="no_medical"
					placeholder="Masukan Nomor Medical Pasien">
		</div>
		<div class="from-group">
			<label for="no_medical">
				Nama
			</label>
			<input type="text" class="form-control" name="nama"
					placeholder="Masukan Nama Pasien">
		</div>
		<div class="from-group">
			<label for="no_medical">
				TTL
			</label>
			<br/>
			<input type="text" name="tempat" size="15"
					placeholder="tempat Lahir">
			<select name="tgl_lahir">
				<option name="tgl_lahir">Tgl
				<option name="tgl_lahir">1
				<option name="tgl_lahir">2
				<option name="tgl_lahir">3
				<option name="tgl_lahir">4
				<option name="tgl_lahir">5
				<option name="tgl_lahir">6
				<option name="tgl_lahir">7
				<option name="tgl_lahir">8
				<option name="tgl_lahir">9
				<option name="tgl_lahir">10
				<option name="tgl_lahir">11
				<option name="tgl_lahir">12
				<option name="tgl_lahir">13
				<option name="tgl_lahir">14
				<option name="tgl_lahir">15
				<option name="tgl_lahir">16
				<option name="tgl_lahir">17
				<option name="tgl_lahir">18
				<option name="tgl_lahir">19
				<option name="tgl_lahir">20
				<option name="tgl_lahir">21
				<option name="tgl_lahir">22
				<option name="tgl_lahir">23
				<option name="tgl_lahir">24
				<option name="tgl_lahir">25
				<option name="tgl_lahir">26
				<option name="tgl_lahir">27
				<option name="tgl_lahir">28
				<option name="tgl_lahir">29
				<option name="tgl_lahir">30
				<option name="tgl_lahir">31
			</select>
			<select name="bulan">
				<option name="bulan">Bln
				<option name="bulan">Januari
				<option name="bulan">Februari
				<option name="bulan">Maret
				<option name="bulan">April
				<option name="bulan">Mei
				<option name="bulan">Juni
				<option name="bulan">Juli
				<option name="bulan">Agustus
				<option name="bulan">September
				<option name="bulan">Oktober
				<option name="bulan">November
				<option name="bulan">Desember
			</select>
			<input type="text" name="tahun" size="10"
				placeholder="Tahun">
		</div>
		<div class="form-group">
			<label for="fname">
				usia
			</label>
			<input type="text" class="form-control" name="usia"
					placeholder="Masukan umur Pasien">
		</div>
		
		<input type="submit" class="btn/btn-success" value="daftar"> 
	</form>
</div>
</body>
</html>
		