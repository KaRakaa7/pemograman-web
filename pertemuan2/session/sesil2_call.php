<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" constant="width-device-width, initial-scale=1.0">
    <title>Sesi 2 - Call</title>
</head>
<body>
    <?php
    echo "Hallo, Nama Saya Adalah : " . $_SESSION['nama'] . "<br>";
    echo "Nomer Absen Saya Adalah : ". $_SESSION['absen'];
    ?>
</body>
</html>