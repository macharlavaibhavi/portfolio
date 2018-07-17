<?php

require "include/common.php";
mysqli_query("INSERT INTO user_items(user_id,item_id,status) 
        VALUES('$user_id','$item_id','Added to cart')");
header('location: products.php');

