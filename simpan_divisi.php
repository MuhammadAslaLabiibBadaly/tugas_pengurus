<?php
//koneksi
require_once('koneksi.php');

// ambil data dari form
$kode_divisi=$_POST['kode'];
$nama_divisi=$_POST['divisi'];
$tunjangan=$_POST['tunjangan'];
$nama=$_POST['id'];

// memasukkan data ke database
$query="INSERT INTO tb_divisi VALUES('$kode_divisi','$nama_divisi','$tunjangan','$nama')";
$simpan= mysqli_query($conn,$query);

header('location: tampil_divisi.php')
?>