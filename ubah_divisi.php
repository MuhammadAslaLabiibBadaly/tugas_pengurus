<?php
//koneksi
require_once('koneksi.php');

// ambil data dari form
$kode_divisi=$_POST['kode_divisi'];
$nama_divisi=$_POST['nama_divisi'];
$tunjangan=$_POST['tunjangan'];
$nama=$_POST['id'];

// memasukkan data ke database
$query="UPDATE tb_divisi SET nama_divisi = '$nama_divisi', tunjangan = '$tunjangan', id = '$nama' WHERE kode_divisi = '$kode_divisi' ";
$simpan= mysqli_query($conn,$query);

header('location: tampil_divisi.php');
?>