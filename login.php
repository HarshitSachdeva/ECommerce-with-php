<?php
require('includes/common.php');
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login | Life Style Store</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
    </head>
    <body>
         <?php
        include('includes/header.php');
        ?>
        <div id="content">
            <div class="container">
                <div class="row row_style">
                    <div class="col-md-4 col-md-offset-4 login">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-default">LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-default"><i>Login to make a purchase</i></p>
                                <form action="login_submit.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
                                    <?php
                                        if (isset($_GET['error'])) {
                                    ?>
                                    <div class="form-group">
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <input type="submit" value="Log In" name="submit" class="btn btn-primary">
                                </form>

                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account? <a href="signup.php">Register</a></p>
                            </div>

                        </div>
                    </div>
         
                </div>
    
             </div>
         </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
