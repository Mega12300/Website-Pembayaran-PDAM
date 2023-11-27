<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #A0522D;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #A0522D;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEMBAYARAN </title>
</head>
<body>
<li><a href="pembayaran.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['id']) && isset($_POST['nama_pembayar']) && isset($_POST['tanggal_pembayaran']) && isset($_POST['nominal_pembayaran']) && isset($_POST['jumlah_tunggakan'])) {
    $id = $_POST['id'];
    $nama_pembayar = $_POST['nama_pembayar'];
	$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
	$nominal_pembayaran = $_POST['nominal_pembayaran'];
	$jumlah_tunggakan = $_POST['jumlah_tunggakan'];

    $query = "INSERT INTO pembayaran (id,nama_pembayar,tanggal_pembayaran,nominal_pembayaran,jumlah_tunggakan) VALUES ('$id', '$nama_pembayar', '$tanggal_pembayaran', '$nominal_pembayaran', '$jumlah_tunggakan')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data Berhasil Ditambahkan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}


mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>DATA PEMBAYARAN</h2>
                <form action="tambah_aksi_pembayaran.php" method="post">
                    <label for="id">ID:</label>
                    <td><select name="id">
				

                <option value="">-----</option>
           <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT id,nama FROM warga") or die (mysqli_error($koneksi));

                while($data = mysqli_fetch_array($query)){
              echo "<option value=$data[id]>$data[nama]$data[id]</option>";
                }                          
                ?>
 </select></td>
                    <label for="nama_pembayar">NAMA PEMBAYAR:</label>
                    <input type="text" id="nama_pembayar" name="nama_pembayar"><br>
					<label for="tanggal_pembayaran">TANGGAL PEMBAYARAN:</label>
                    <input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran"><br>
					<label for="nominal_pembayaran">NOMINAL PEMBAYARAN:</label>
                    <input type="text" id="nominal_pembayaran" name="nominal_pembayaran"><br>
					<label for="jumlah_tunggakan">JUMLAH TUNGGAKAN:</label>
                    <input type="text" id="jumlah_tunggakan" name="jumlah_tunggakan"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>