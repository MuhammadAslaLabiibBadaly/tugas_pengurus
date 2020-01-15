<?php
// memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php'); -sama seperti require

// ambil data dari database
$query="SELECT * FROM tb_pengurus";
$data= mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Data Pengurus</title>
</head>
<body class="theme-black">
	<div class="container">
		<form class="form">
			<div class="tabel">
				<h1>Data Pengurus</h1>

				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Gender</th>
							<th>Gaji</th>
							<th>Aksi</th>
						</tr>
					</thead>
				<?php
				while ($row=mysqli_fetch_assoc($data)) {
				?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['gaji']; ?></td>
						<td>
							<a href="edit_data.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a> |
							<a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Yakin Nih??')"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php
				 }
				?>
				</table>
			</div>
		</form>
			<div class="inputan">
				<h1>INPUT DATA</h1>

				<form method="post" action="simpan_data.php">
					<div class="form-group">
						<label>ID</label>
					    <input type="number" name="id" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label class="col-form-label">NAMA</label>
					    <input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="col-form-label">ALAMAT</label>
					    <textarea name="alamat" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label class="col-form-label">GENDER</label>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="L" class="form-check-input">
							<label class="form-check-label">Laki-Laki</label>   
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="P"class="form-check-input">
							<label class="form-check-label">Perempuan</label>  
						</div>
					</div>
					<div class="form-group">
						<label class="col-form-label">GAJI</label>
						<input type="number" name="gaji" class="form-control">
					</div>
					<button type="submit" class="btn btn-lg btn-block btn-primary">simpan</button>
					<button type="reset" class="btn btn-lg btn-block btn-danger">batal</button>
				</form>
			</div>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>