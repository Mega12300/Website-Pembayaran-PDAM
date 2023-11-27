<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran PDAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pembayaran PDAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_admin.php">Data Warga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pembayaran.php">Data Pembayaran</a>
        </li>
		<div class="nav-item">
				<a class="btn btn-dark" href="logout.php">LOGOUT</a>
			</div>
  </div>
      </ul>
      <div>
<form class="d-flex" role="search">

<!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>

    <?php if(isset($_GET['cari'])): ?>
      <a href="index_admin.php" class="btn btn-danger ml-2">X</a>
    <?php endif; ?>
  </form>
</div>
    </div>
  </div>
</nav>
 
	<center><h2>DATA WARGA</h2></center>
	<br/>
	<a href="tambah_warga.php">INPUT DATA WARGA</a>
	<br/>
	<br/>
	<table border="4" class="table bordered">
		<tr>
      <th style = "background-color:#9BA4B5; color;#fff">No</th>
			<th style = "background-color:#9BA4B5; color;#fff">Id</th>
			<th style = "background-color:#9BA4B5; color;#fff">NIK</th>
			<th style = "background-color:#9BA4B5; color;#fff">Nama</th>
			<th style = "background-color:#9BA4B5; color;#fff">Jenis Kelamin</th>
     		<th style = "background-color:#9BA4B5; color;#fff">Nomor Handphone</th>
      <th style = "background-color:#9BA4B5; color; #fff">OPSI</th>
		</tr>
        <tr>
            <td>
		<?php 
		include 'koneksi.php';
		// Proses pencarian
    if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysqli_query($koneksi, "SELECT * FROM warga WHERE id LIKE '%$cari%' OR nama LIKE '%$cari%'");
		  } else {
			$data = mysqli_query($koneksi, "SELECT * FROM warga");
		  }
			  $no = 1;
			  while($d = mysqli_fetch_array($data)){
				?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['nomor_hp']; ?></td>
				<td>
				<a href="edit_warga.php?id=<?php echo $d['id'];?>">EDIT</a>
				<a href="hapus_warga.php?hapus=<?php echo $d['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">HAPUS</a>			
      </td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>