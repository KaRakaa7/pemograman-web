<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Successfully to Project1 <br>";
// ubah koneksi ke database project2
$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection_2){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Successfully to Project2 <br>";
// isi kode php untuk database project2
mysqli_close($connection);
?>