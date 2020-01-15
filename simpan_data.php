<?php
//koneksi
require_once('koneksi.php');

// ambil data dari form
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];

// memasukkan data ke database
$query="INSERT INTO tb_pengurus VALUES('$id','$nama','$alamat','$gender','$gaji')";
$simpan= mysqli_query($conn,$query);

header('location: tampil_data.php')
?>

<!-- <a href="tampil_data.php">KEMBALI</a> -->