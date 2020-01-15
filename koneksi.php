<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pengurus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Koneksi error: " . mysqli_connect_error());
}
// echo "Koneksi Berhasil";
?>