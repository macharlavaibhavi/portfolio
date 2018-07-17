<?php
require "include/common.php";
if (isset($_SESSION['email']))
    {   header('location: products.php');
    }
    $NewPassword=$_POST['NewPassword'];
    $ReTypeNewpassword=$_POST['Re-Type New Password'];
    if (strlen($Newpassword) < 6) {
  header('location: setting.php?password_error=enter correct password');
}

    if($ReTypeNewPassword != $NewPassword)
    {
        echo "password should match";
     
    }
 else {
 $query_result= mysqli_query("select password from users where $user_id === user_id");
 $row=mysqli_fetch_array($query_result);
 if($row['id']===$password)
 {
 mysqli_query("update users set password=$password ") or die(mysqli_error($con));
 echo "password updated";
 }
 else {
     header("location:'setting.php'?password_error_enter correct password");
 }
 }
 

