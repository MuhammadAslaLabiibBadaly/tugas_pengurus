<?php
include ('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

$query="DELETE FROM tb_divisi WHERE kode_divisi = '$kode_divisi' ";
$data= mysqli_query($conn,$query); 

header('location: tampil_divisi.php');
?>