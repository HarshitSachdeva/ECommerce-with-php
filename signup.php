<?php
require('includes/common.php');
if(isset($_SESSION['email']))
{
    header('location:products.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Signup | Life Style Store</title>
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
        
        <div class="container" id="content">
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 signupform">
                    <h2>SIGNUP</h2>
                    <form action="signup_script.php"  method="post">
                        <input type="text" name="name" class="form-group form-control" placeholder="Name" value="<?php if(isset($name)) { echo $name; } ?>" required pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        <input type="email" name="email" class="form-group form-control" placeholder="Email" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <input type="password" name="pass" class="form-group form-control" placeholder="Password" required pattern=".{6,}">
                
                        <input type="number" name="cont" class="form-group form-control" placeholder="Contact"  maxlength="10" size="10" required>
                        <input  type="text" class="form-control form-group"  placeholder="City" name="city" required>
                        <textarea name="add" placeholder="Address" rows="4" class="form-control form-group"></textarea>
                        <?php
                            if(isset($_GET['m'])){
                         ?>
                        <div class="form-group">
                            <?php
                                echo $_GET['m'];
                            ?>
                        </div>
                        <?php
                            }
                        ?>
                            
                        <input type="submit" value="Submit" class="form-control btn btn-block btn-primary input-lg">
                    </form>  
                </div>
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
