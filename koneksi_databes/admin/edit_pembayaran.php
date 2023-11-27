<!DOCTYPE html>
<html>
<head>
	<title>DATA WARGA</title>
</head>
<body>
 
	<h2>SELAMAT DATANG DI DATA PEMBAYARAN</h2>
	<br/>
	<a href="pembayaran.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEMBAYARAN</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query ($koneksi,"select * from pembayaran WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi_pembayaran.php">
			<table>
				<tr>			
					<td>Id</td>
					<td><input type="text" name="id" value="<?php echo $d['id']; ?>"></td>
				</tr>
				<tr>
				    <td>Nama Pembayar</td>
					<td><input type="text" name="nama_pembayar" value="<?php echo $d['nama_pembayar']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pembayaran</td>
					<td><input type="date" name="tanggal_pembayaran" value="<?php echo $d['tanggal_pembayaran']; ?>"></td>
				</tr>
                <tr>
					<td>Nominal Pembayaran</td>
					<td><input type="text" name="nominal_pembayaran" value="<?php echo $d['nominal_pembayaran']; ?>"></td>
				</tr>
                <tr>
					<td>Jumlah Tunggakan</td>
					<td><input type="text" name="jumlah_tunggakan" value="<?php echo $d['jumlah_tunggakan']; ?>"></td>
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