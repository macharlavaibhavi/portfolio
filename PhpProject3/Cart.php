


<!DOCTYPE html>
<?php 
require "include/common.php";
if (!isset($_SESSION['email'])) {   header('location:index.php');
} 
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
        $_SESSION['user_id'] = $userid; ?>
        
        $select_query="select * from user_items where $userid=user_items.userid";
        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con);
        $total_rows_fetched=mysqli_num_rows($select_query_result);
        if($total_rows_fetched==0)
      {die("Please enter username and or password!");
      }
      else
      { ?> <div class="top">
          <div class="container">
              <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>       </th>
                           </tr>

     $total = 0;
while($row = mysql_fetch_array($select_query_result)){
 $id = append($row['id'],',');
  $price= $row['price'] ;
  $total += $price;
?>
                <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>
                           <tr>
                        <td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['name'] ?> </td>
                        <td><?php echo $row['price'] ?> </td>
                        <td> </td>
                        
                    </tr>
                   
                  }
                    <tr>
                        <td> </td>
                        <td>Total</td>
                        <td> <?php echo $total ?></td>
                        <td><button class="btn btn-primary"><a href="success.php">Confirm Order</a></button></td>
                    </tr>
                    
                   
                </tbody>
                
                
            </table>
                  
                  
        </div>
          </div>
        </div>
        }
        ?>
        <?php include "include/footer.php" ?>
      
    </body>
</html>
