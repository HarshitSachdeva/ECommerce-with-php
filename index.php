<?php
require('includes/common.php');
if (isset($_SESSION['email'])) 
    { 
    header('location: products.php');
    }  

?>


<html>
    <head>
        <title>Welcome | Life Style Store</title>
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
            <div id="banner_image">
                <div class="container">
                    <div id="banner_content">
                        <h1>We Sell Lifestyle</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <a href="products.php">
                            <button type="button" class="btn btn-danger btn-lg active ">Shop Now</button>
                        </a>     
                    </div>
                </div>  
            </div>
  

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <img src="images/camera.jpg" alt="camera" class="img-responsive"> 
                            <div class="caption details">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                         </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail"><img src="images/watch.jpg" alt="watch" class="img-responsive">
                            <div class="caption details">
                                <h3>Watches</h3> 
                                <p>Original watches from the best brands</p> 

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail"><img src="images/shirt.jpg" alt="shirts" class="img-responsive"> 
                            <div class="caption details">
                                <h3>Shirts</h3> 
                                <p>Our collection of Tshirts</p>
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
