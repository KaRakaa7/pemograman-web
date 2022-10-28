<?php

include_once("config.php");

$query = "SELECT * FROM customersraka ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Homepage</title>
    </head>

    <body>
    <br>
    <div class="card col-md-10 offset-md-1">
        <a class="btn btn-primary" href="add.php">Add New Customers</a>
    <br>
        <table class="table table-bordered" width='100%' border=1>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Join Date</th>
                    <th>last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fetch Data Costumer Dengan array Associative -->
                <?php if($result->num_rows > 0): ?>
                <?php while($customer_data = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><?php echo $customer_data['name']?></td>
                    <td><?php echo $customer_data['phone']?></td>
                    <td><?php echo $customer_data['email']?></td>
                    <td><?= $customer_data ['created']?> </td>
                    <td><?= $customer_data ['updated']?> </td>
                    <td>
                        <a class="btn btn-success" href='edit.php?id=<?=$customer_data["id"]?>'>Edit</a> 
                        | 
                        <a class="btn btn-danger" href='delete.php?id=<?=$customer_data["id"]?>'>Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" rowspan="1" header="" align="center">Data Customer Tidak Ditemukan!
                        </td>
                    </tr>
                    <?php endif; ?>

                    <?php mysqli_free_result($result); ?>
            </tbody>
    </table>
    </div>

    <?php if(isset($_GET["message"])){
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location='index.php'</script>";
    }
    ?>

    </body>
</html>