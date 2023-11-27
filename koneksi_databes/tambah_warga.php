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
    <title>DATA WARGA </title>
</head>
<body>
<li><a href="index_admin.php">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['id']) && isset($_POST['nik']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['nomor_hp'])) {
    $id = $_POST['id'];
    $nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$nomor_hp = $_POST['nomor_hp'];

    $query = "INSERT INTO warga (id,nik,nama,jenis_kelamin,nomor_hp) VALUES ('$id', '$nik', '$nama', '$jenis_kelamin', '$nomor_hp')";

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
                <h2>DATA WARGA</h2>
                <form action="tambah_aksi.php" method="post">
                    <label for="id">ID:</label>
                    <input type="text" id="id" name="id"><br>
                    <label for="nik">NIK:</label>
                    <input type="text" id="nik" name="nik"><br>
					<label for="nama">NAMA:</label>
                    <input type="text" id="nama" name="nama"><br>
					<label for="jenis_kelamin">JENIS KELAMIN:</label>
                    <select name="jenis_kelamin" id="jenis_kelamin">
					<option value="perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option> </select>
					<label for="nomor_hp">NO HANDPHONE:</label>
                    <input type="text" id="nomor_hp" name="nomor_hp"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>