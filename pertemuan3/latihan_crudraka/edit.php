<?php
include_once("config.php");

$id = $_GET['id'];

$_result = mysqli_query($conn_db, "SELECT * FROM customersraka WHERE id=$id");
if(!$_result){
    header("Location:index.php");
}
while($customer_data = mysqli_fetch_array($_result))
{
    $name = $customer_data['name'];
    $email = $customer_data['email'];
    $phone = $customer_data['phone'];
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Edit Costumer Data</title>
    </head>

    <body>
        <br>
        <div class="card col-md-6 offset-md-3">
        <form name="update_user" method="post" action="edit_process.php">
            <div>
                <br>
            <a class="btn btn-success" href="index.php">Home</a>
            <legend align="center">Edit Data Costumers</legend>
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="name" value=<?= $name ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value=<?php echo $phone; ?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <input class="btn btn-primary" type="submit" name="update" value="Update">
        </form>
    </div>
    </body>
</html>