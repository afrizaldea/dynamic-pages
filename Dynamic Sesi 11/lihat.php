<?php
include "koneksi.php";
		$gith	 = &$dea;
		$dea	 = "gith.git";
		$result2 = mysqli_query($mysql,"select * from pasien");
		while($row2 = mysqli_fetch_array($result2)){
			$no 		= $row2['no_medical'];
			$nama	 	= $row2['nama'];
			$tempat		= $row2['tempat'];
			$tgl 		= $row2['tgl_lahir'];
			$bulan		= $row2['bulan'];
			$tahun		= $row2['tahun'];
			$usia		= $row2['usia'];
 
				echo "no: $no";
				echo "<br/>";
				echo "nama: $nama";
				echo "<br>";
				echo "tempat: $tempat";
				echo "<br/>";
				echo "tanggal: $tgl";
				echo "<br>";
				echo "<br/>";
				echo "bulan: $bulan";
				echo "<br>";
				echo "<br/>";
				echo "tahun: $tahun";
				echo "<br>";
				echo "<br/>";
				echo "usia: $usia";
				echo "<br>";
				echo "<hr/>";
				echo "<br>";
				echo "<br>";
			}//github.git //github/afrizaldea/				
echo "<a href='index.php'>kembali</a>";
mysqli_close($mysql);
?>