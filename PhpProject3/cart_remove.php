<?php
require "include/common.php";
$mysqli_query = mysqli_query("delete * from users_items where user_id===$user_id and item_id=get['id']");

if(mysqli_query==true)
{
    header('location:products.php');
}
