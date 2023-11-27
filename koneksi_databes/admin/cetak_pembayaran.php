<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PEMBAYARAN</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Id</th>
			<th>Nama Pembayar</th>
			<th>Tanggal_Pembayaran</th>
			<th>nominal Pembayaran</th>
			<th>Jumlah Tunggakan</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pembayaran");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama_pembayar']; ?></td>
			<td><?php echo $data['tanggal_pembayaran']; ?></td>
			<td><?php echo $data['nominal_pembayaran']; ?></td>
			<td><?php echo $data['jumlah_tunggakan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>