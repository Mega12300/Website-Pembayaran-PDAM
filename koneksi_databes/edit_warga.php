<!DOCTYPE html>
<html>
<head>
	<title>DATA WARGA</title>
</head>
<body>
 
	<h2>DATA WARGA</h2>
	<br/>
	<a href="index_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA WARGA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query ($koneksi,"select * from warga WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>Id</td>
					<td><input type="text" name="id" value="<?php echo $d['id']; ?>"></td>
				</tr>
				<tr>
				    <td>NIK</td>
					<td><input type="text" name="nik" value="<?php echo $d['nik']; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
                <tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
                <tr>
					<td>No Handphone</td>
					<td><input type="text" name="nomor_hp" value="<?php echo $d['nomor_hp']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>