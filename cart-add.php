<?php
    require('includes/common.php');
    if (isset($_GET['pid']) && is_numeric($_GET['pid'])) {
        $item_id = $_GET['pid'];
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: products.php');
    }
?>

