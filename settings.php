<?php
require('includes/common.php');
if(!isset($_SESSION['email'])) {
header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Settings | Life Style Store</title>
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
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 settings">
                    <h4 style="text-align: center">Change Password</h4>
                    <form action="settings_script.php" method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Change</button>
                        <?php
                        if(isset($_GET['error'])) {
                        echo "<br><center><b class='red'>" .$_GET['error'] . "</b></center>";
                        }
                        ?>
                    </form>
<!--                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="text-default">Change Password</h4>
                        </div>
                        <div class="panel-body">
                        
                            <form>

                                <div class="form-group">
                                    <input type="password" name="pass" placeholder="Old Password" class="form-control input-lg" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" placeholder="New Password" class="form-control input-lg" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" placeholder="Re-Type New Password" class="form-control input-lg" required>
                                </div>
                                <input type="submit" value="Change" class="btn btn-primary">

                            </form> 
                        </div>
                    </div>
                
                
                </div> -->
                </div>
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
