<!DOCTYPE html>
<html>
<head>
	<title>Tabel Informasi</title>
</head>
<body>
	<h2>Tabel Informasi Pengurus iDev 2k16</h2>
	 <table>
	 	<tr>
	 		<td>Nomor</td>
	 		<td>Nama</td>
	 	</tr>
	 		<?php 
		$listAnggota = ["Rizal","Wildan","Marta","Adis","Acong","Wendi"];
		$no = 1;
		foreach ($listAnggota as $as) {
			# code...
	 	
	 	
	 	
	 ?>
	 	<tr>
	 		<td><?php echo $no ?></td>
	 		<td><?php echo $as ?></td>
	 	</tr>
	 	<?php 
	 	$no++;
	 } ?>

	 </table>
</body>
</html>