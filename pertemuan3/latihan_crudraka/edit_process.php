<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    date_default_timezone_set('Asia/Jakarta');
    $updated=date('Y-m-d H:i:s');

    $result = mysqli_query($conn_db, "UPDATE customersraka SET name='$name', email='$email', phone='$phone', updated='$updated' WHERE id=$id");


    if($result){
        $message = "Customer " . $name . " Berhasil Di Perbarui";
    }else{
        $message = "Gagal Memperbarui Customer " . $name;
    }

    header("Location:index.php?message=" . $message);
}
?>