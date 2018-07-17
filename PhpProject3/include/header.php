<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              
                  <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
            </button>
            <a classs="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="na navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email']))
                {
                    ?>
                 <li><a href = "Cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>      
                 <li><a href = "Setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>      
                 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
                ?>
                <?php
                }
                else {
                    ?>
                 <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>         
                 <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>   
               <?php
                }
                ?>
            </ul>
        </div>
        </div>
    </div>
