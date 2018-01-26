<?php
include_once('includes/common.php');
?>
<html>
    <head>
        <title>Products | Life Style Store<</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" type="image/png" href="images/logo.png">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
    </head>
    <body>
        <?php
        include('includes/header.php');
        include('includes/check-if-added.php');
        ?>
       
        <div class="container" id="content">
            <div class="col-md-12 con">
                <div class="jumbotron" style="background-color:#D3D3D3;">
                    <center><h1>Welcome to our Lifestyle Store!</h1></center>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>   
                </div>
                <hr>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/camera1.jpg" alt="camera" class="img-responsive">
                        <div class="caption"  >
                            <h3 style="font-weight: bold">Canon EOS</h3>
                            <h4 style="font-weight: bold">Price:Rs.36000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                                 
                            
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/camera2.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Nikon EOS</h3>
                            <h4 style="font-weight: bold">Price:Rs.40000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/camera3.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Sony DSLR</h3>
                            <h4 style="font-weight: bold">Price:Rs.50000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/camera4.jpg" alt="camera" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Olympus DSLR</h3>
                            <h4 style="font-weight: bold">Price:Rs.50000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/watch1.jpg" alt="watch" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Titan Model #301</h3>
                            <h4 style="font-weight: bold">Price:Rs.13000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"> <input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/watch2.jpg" alt="watch" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Titan Model #201</h3>
                            <h4 style="font-weight: bold">Price:Rs.3000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="index.php"> <input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/watch3.jpg" alt="watch" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">HMT Milan</h3>
                            <h4 style="font-weight: bold">Price:Rs.8000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/watch4.jpg" alt="watch" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Faber Luba #111</h3>
                            <h4 style="font-weight: bold">Price:Rs.18000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"> <input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
            </div>
           <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/shirt1.jpg" alt="shirt" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">H&W</h3>
                            <h4 style="font-weight: bold">Price:Rs.800.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/shirt2.jpg" alt="shirt" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Luis Phil</h3>
                            <h4 style="font-weight: bold">Price:Rs.2000.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/shirt3.jpg" alt="shirt" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">John Zok</h3>
                            <h4 style="font-weight: bold">Price:Rs.1500.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="images/shirt4.jpg" alt="shirt" class="img-responsive">
                        <div class="caption">
                            <h3 style="font-weight: bold">Jhalsani</h3>
                            <h4 style="font-weight: bold">Price:Rs.1300.00</h4>
                            <?php
                             if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                 <?php 
                                    } else {  //We have created a function to check whether this particular product is added to cart or not.   
                                 if(check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)   
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else { 
                                  ?>
                                  <a href="cart-add.php?pid=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php 
                                  }
                                  }
                                  ?>
                            <!--<a href="login.php"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"></a>-->
                        </div>
                    </div>  
                </div>
           </div> 
            <hr>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </body>
</html>
