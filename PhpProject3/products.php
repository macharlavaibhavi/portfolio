
<!DOCTYPE html>
<?php 
require "include/common.php";
?>
<html>
    <head>
    <link href="styl1.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
    </head>
    <body>
       <?php include "include/header.php";
       include "check_if_added.php" ?>
     <div class="top">
        <div class="container-fluid">
        <div class="jumbotron">
                <h1>Welcome to our LifeStyle Store!
                </h1>
                <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place</p>
            </div>
        </div>
     </div>
        <div class="row text-center">
            <h3>Cameras</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                <div class="caption">
                    <h4>Cannon EOS</h4>
                    <h6>price Rs.30000.00</h6>
                   
                                <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
   
                </div>
            </div>
            </div>
             <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>SonyDSLR</h4>
                    <h6>price Rs.40000.00</h6>
                     <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
               </div></div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                     <h4>SonyDSLR</h4>
                    <h6>price Rs.50000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
            </div>
             </div>
            <div class="col-md-3 col-sm-6">
              <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>OlympusDSLR</h4>
                    <h6>price Rs.80000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
              </div>
            </div>
        </div>
         <div class="row text-center">
            <h3>Watches</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                <div class="caption">
                    <h4>Titan Model #301</h4>
                    <h6>price Rs.13000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
                </div>
            </div>
            </div>
             <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>Titan Model #201</h4>
                    <h6>price Rs.3000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
               </div></div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                     <h4>HMT Milan</h4>
                    <h6>price Rs.8000.00</h6>
                     <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
            </div>
             </div>
            <div class="col-md-3 col-sm-6">
              <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>faber Luba #111</h4>
                    <h6>price Rs.18000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
              </div>
            </div>
        </div>
         <div class="row text-center">
            <h3>Shirts</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                <div class="caption">
                    <h4>H&W</h4>
                    <h6>price Rs.800.00</h6>
                     <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
                </div>
            </div>
            </div>
             <div class="col-md-3 col-sm-6">
               <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>Luis Phil</h4>
                    <h6>price Rs.1000.00</h6>
                    <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
               </div></div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail"><img src="" alt="respnsive image">
                     <h4>John Zok</h4>
                    <h6>price Rs.1500.00</h6>
                     <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>            
            </div>
             </div>
            <div class="col-md-3 col-sm-6">
              <div class="thumbnail"><img src="" alt="respnsive image">
                   <h4>Jhalsanai</h4>
                    <h6>price Rs.1300.00</h6>
                     <?php if (!isset($_SESSION['email'])) { ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
  <?php   
  } else {  
      //We have created a function to check whether this particular product is added to cart or not.   
       if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                            
                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                        
                } else {    
                 ?>  
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>         
  <?php     
  }           
  } ?>           
              </div>
            </div>
        </div>
         <?php include "include/footer.php"; ?>
     
        
    </body>
    
</html>