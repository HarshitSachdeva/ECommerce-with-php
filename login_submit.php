<?php
    require('includes/common.php');

    if (isset($_POST['submit'])) {
//        $email = $_POST['email'];
        $email = mysqli_real_escape_string($con, $_POST['email']);
//        $password = $_POST['epass'];
        $password = mysqli_real_escape_string($con,$_POST['password']);
//        $password = MD5($password);
        // Query checks if the email and password are present in the database.
        $query = "SELECT id, email FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query)or die(mysqli_error($con));
        $num = mysqli_num_rows($result);
        // If the email and$error password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
        if ($num == 0) {
          $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
          header('location: login.php?error=' . $error);
        } else {  
          $row = mysqli_fetch_array($result);
          $_SESSION['email'] = $row['email'];
          $_SESSION['user_id'] = $row['id'];
          header('location: products.php');
        }
    }

?>


