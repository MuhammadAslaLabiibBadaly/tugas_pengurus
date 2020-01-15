<?php
include ('koneksi.php');

$id=$_GET['id'];

$query="DELETE FROM tb_pengurus WHERE id = '$id' ";
$data= mysqli_query($conn,$query); 

header('location: tampil_data.php');
?>