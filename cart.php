<?php
    require('includes/common.php');
    if(!isset($_SESSION['email'])) {
        header('location:index.php');
    }  
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Cart | Life Style Store</title>
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

        <div class="container" id="content">
            <div class="col-md-6 col-md-offset-3 settings">
            <table class="table table-responsive table-striped cart">
                 <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price, items.pid, items.name FROM users_items INNER JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $id = "";
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum+= $row['price'];
                                        $id .= $row['pid'] . ", ";
                                        echo "<tr><td>" . "#" . $row['pid'] . "</td><td>" . $row['name'] . "</td><td>Rs " . $row['price'] . "</td><td><a href='cart-remove.php?pid={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>";
                                    }
                                    $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?pid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
            
            </table>
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
