<?php
include ('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

$query="SELECT * FROM tb_divisi WHERE kode_divisi = '$kode_divisi' ";
$data= mysqli_query($conn,$query); 

$row =mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="edit_style.css">
	<title>Edit</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-center">Edit Data</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form method="post" action="ubah_divisi.php">
					<div class="form-group">
						<label>KODE</label>
					    <input type="text" name="kode_divisi" class="form-control" required="required" readonly value="<?php echo $row['kode_divisi']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">DIVISI</label>
					    <input type="text" name="nama_divisi" class="form-control" value="<?php echo $row['nama_divisi']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">TUNJANGAN</label>
					    <input type="text" name="tunjangan" class="form-control" value="<?php echo $row['tunjangan']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">ID PENGURUS
							<select name="id">
								<?php
								$query_pengurus="SELECT * FROM tb_pengurus";
								$data_pengurus=mysqli_query($conn,$query_pengurus);
								while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
								?>
									<option value="<?php echo $row_pengurus['id'] ?>"
										<?php if (!strcmp($row['id'], $row_pengurus['id'])) {echo "SELECTED";
										}; ?>><?php echo $row_pengurus['nama']; ?>
									</option>
								<?php
								 }?>
								 
							</select>
						</label>
					</div>
					<button type="submit" class="btn btn-lg btn-block btn-primary">simpan</button>
					<button type="reset" class="btn btn-lg btn-block btn-danger">batal</button>
				</form>
		</div>
	</div>
</div>			

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>