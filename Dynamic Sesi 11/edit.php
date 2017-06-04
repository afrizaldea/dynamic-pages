<?php
include "koneksi.php";
$no = $_POST["no_medical"];
$nama = $_POST["nama"];

$result1 = mysqli_query($mysql,"select no_medical from pasien where no_medical='$no'");


	while($row1 = mysqli_fetch_array($result1)){

		$baris = $row1['no_medical'];
			echo "<h4>Data NOMOR";
			echo $baris;
		$sql = "UPDATE pasien SET nama='$nama' WHERE no_medical='$baris'";
		if (mysqli_query($mysql, $sql)) {
			echo " berhasil di update</h4>";
			echo "<br/>";
			echo "<a href='index.php'>kembali</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='lihat.php'>lihat data terbaru</a>";
		}else{
			echo "Error updating record: " . mysqli_error($mysql);
	}
  }
mysqli_close($mysql);
?>