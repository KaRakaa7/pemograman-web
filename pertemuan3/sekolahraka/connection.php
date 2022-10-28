<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahraka");
if(!$connection){
    echo mysqli_connect_error();
}
?>