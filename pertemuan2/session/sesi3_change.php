<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" constant="width-device-width, initial-scale=1.0">
    <title>Sesi 3 - Change</title>
</head>
<body>
    <?php
    $_SESSION['nama'] = "KaRakaa";

    echo "Variabel session nama telah di ubah menjadi : " . $_SESSION['nama'];
    ?>
</body>
</html>