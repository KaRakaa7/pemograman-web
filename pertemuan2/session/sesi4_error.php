<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" constant="width-device-width, initial-scale=1.0">
    <title>Sesi 4 - Error</title>
</head>
<body>
    <?php
    echo "Isi dari variable alamat adalah : " . $_SESSION['alamat'];
    ?>
</body>
</html>