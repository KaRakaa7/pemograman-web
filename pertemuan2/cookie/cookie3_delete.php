<?php
setcookie("user", "", time() - 3600, "/");

if(isset($_COOKIE['user'])){
    echo "Cookie : " . 'user' . " Telah diatur!<br/>";
    echo "Nilainya adalah " . $_COOKIE['user'];
}else{
    echo "Nama cookie : " . 'user' . " Tidak diatur";
}
?>