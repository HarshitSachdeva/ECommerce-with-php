<?php
    require('includes/common.php');
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['pid'];

    //We will change the status of the items purchased by the user to 'Confirmed'
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query) or die($mysqli_error($con));

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Success | Life Style Store</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
         <?php
        include('includes/header.php')
        ?>

        <div class="container-fluid" id="content">
            <div class="col-md-12 con">
                <div class="jumbotron" style="background-color:#D3D3D3">
                    <center>
                        <h3 style="font-weight: bold;">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                        <p style="font-weight: bold;">Click <a href="products.php">here</a> to purchase any other item.</p>
                    </center>
                </div>
            </div>
            
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
