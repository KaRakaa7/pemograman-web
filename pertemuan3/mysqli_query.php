<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Successfully to Project1";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP, JURUSAN) VALUES('', 'Raka Aji Nugroho', 'Jalan Samudra Pasai', '2005-04-27', '77777', 'RPL')");
if(!$query_insert){
    echo("Error query" . mysqli_error($connection));
}
mysqli_close($connection);
?>