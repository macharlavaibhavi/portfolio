<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require "include/common.php";
if (!isset($_SESSION['email'])) {   header('location: index.php'); }
 while($item_id)
{
    $update_name_query="update users_items 
             SET status='confirmed' where id=$id";
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
        <title>Setting</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-offest-2">
        <div class="jumbotron">
            <p> Your order is confirmed.<br> Thank you for shopping with us.<br><a href="products.php"> Click here</a> to purchase any other item.</p>
        </div>
                </div>
            </div>
        </div>
    </body>
</html>
