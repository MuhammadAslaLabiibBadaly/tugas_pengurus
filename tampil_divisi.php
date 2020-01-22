<?php
// memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php'); -sama seperti require

// ambil data dari database
$query="SELECT tb_divisi.kode_divisi, tb_divisi.nama_divisi, tb_divisi.tunjangan, tb_pengurus.nama FROM tb_divisi,tb_pengurus WHERE tb_divisi.id=tb_pengurus.id";
$data= mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Data Divisi</title>
</head>
<body class="theme-black">
	<div class="container">
		<form class="form">
			<div class="tabel">
				<h1>Data Divisi</h1>

				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>Kode</th>
							<th>Divisi</th>
							<th>Tunjangan</th>
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
				<?php
				while ($row=mysqli_fetch_assoc($data)) {
				?>
					<tr>
						<td><?php echo $row['kode_divisi']; ?></td>
						<td><?php echo $row['nama_divisi']; ?></td>
						<td><?php echo $row['tunjangan']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td>
							<a href="edit_divisi.php?kode_divisi=<?php echo $row['kode_divisi']; ?>"><i class="fa fa-edit"></i></a> |
							<a href="hapus_divisi.php?kode_divisi=<?php echo $row['kode_divisi']; ?>" onclick = "return confirm('Hapus data')"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php
				 }
				?>
				</table>
			</div>
		</form>
			<div class="inputan">
				<h1>Input Divisi</h1>

				<form method="post" action="simpan_divisi.php">
					<div class="form-group">
						<label>KODE</label>
					    <input type="text" name="kode" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label class="col-form-label">DIVISI</label>
					    <input type="text" name="divisi" class="form-control">
					</div>
					<div class="form-group">
						<label class="col-form-label">TUNJANGAN</label>
					    <input type="text" name="tunjangan" class="form-control">
					</div>
					<div class="form-group">
						<label class="col-form-label">ID PENGURUS
							<select name="id" class="form-control">
								<?php
								$query_pengurus="SELECT * FROM tb_pengurus";
								$data_pengurus=mysqli_query($conn,$query_pengurus);
								while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
								?>
									<option value="<?php echo $row_pengurus['id'] ?>">
										<?php echo $row_pengurus['nama']; ?>
									</option>
								<?php
								 }
								?>
							</select>
						</label>
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