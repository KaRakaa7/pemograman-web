<?php

session_start();

$_SESSION['nama'] = "Raka Aji Nugroho";

$_SESSION['absen'] = 22;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" constant="width-device-width, initial-scale=1.0">
    <title>Latihan Session</title>
</head>
<body>
    <?php
    echo "Nama Saya : " . $_SESSION['nama'] . "<br>". "Nomer Absen : ". $_SESSION['absen'];
    ?>
</body>
</html>