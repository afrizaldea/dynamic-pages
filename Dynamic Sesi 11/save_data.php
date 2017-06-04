<?php
	include "koneksi.php";
	
	$no 		= 	$_POST["no_medical"];
	$nama 		= 	$_POST["nama"];
	$tempat 	= 	$_POST["tempat"];
	$tgl		=	$_POST["tgl_lahir"];
	$bulan		=	$_POST["bulan"];
	$tahun		=	$_POST["tahun"];
	$usia		=	$_POST["usia"];
	
	$sql = "INSERT INTO pasien (no_medical, nama, tempat, tgl_lahir, bulan, tahun,usia)
			VALUES ('$no', '$nama', '$tempat','$tgl','$bulan','$tahun', '$usia')";
			
if ($mysql->query($sql) == TRUE) {
	echo "Pasien berhasil di daftarkan";
		echo "<br/>";
		echo "<hr/>";
		echo "<form action='edit.php' method='POST'>";
		echo "nama user: $nama";
		echo "<br/>";
		echo "<h3> edit data </h3>";
		echo "nomor id: ". "<br/>";
		echo "<input type='text' name='no_medical' value='$no'>";
		echo "<br/>";
		echo "nama: ". "<br/>";
		echo "<input type='text' name='nama' value='$nama'>";
		echo "<br/>";
		echo "tempat: ". "<br/>";
		echo "<input type='text' name='tempat' value='$tempat'>";
		echo "<br/>";
		echo "tgl: ". "<br/>";
		echo "<input type='text' name='tgl' value='$tgl'>";
		echo "<br/>";
		echo "bulan: ". "<br/>";
		echo "<input type='text' name='bulan' value='$bulan'>";
		echo "<br/>";
		echo "tahun: ". "<br/>";
		echo "<input type='text' name='tahun' value='$tahun'>";
		echo "<br/>";
		echo "usia: ". "<br/>";
		echo "<input type='text' name='usia' value='$usia'>";
		echo "<br/>";
		echo "<input type='submit' name='submit' value='ubah data'>";
		echo "<br/>";
		echo "<br/>";
		echo "<a href='index.php'>kembali</a>";
		echo "</form>";
	
	
	
	} else {
	echo "Gagal daftar pasien";
	}
	
	$mysql->close();
?>