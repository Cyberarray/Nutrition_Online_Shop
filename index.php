<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="" />
        <title>Nutritions Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell Nutritions and Sports and Energy drinks</h1>
                       <p>Flat 40% OFF on all premium nutritions brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/drinks.jpg" alt="Drinks">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Energy and Sports drinks</p>
                                        <p>Choose the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.png" alt="whey">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Whey Protiens</p>
                                    <p>Original whey products.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/pills.jpg" alt="Pills">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Nutrition Pills</p>
                                   <p>Our wide range of Nutrition suite everybody.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Nutritions Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Aakash Kumar</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>