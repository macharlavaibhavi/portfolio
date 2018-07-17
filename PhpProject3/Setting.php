<?php require "include/common.php";
if (!isset($_SESSION['email'])) 
    {   header('location: index.php'); } 
 
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="styl1.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SettingPage</title>
</head>
    <body>
        
        <?php include "include/header.php" ?>
        
        <div class="container-fluid">
            <div class="row row-align">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form action="Settings_script" method="POST">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="OldPassword" name="OldPassword"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="NewPassword"  name="NewPassword" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-Type New Password" name="Re-Type New Password" required = "true">
                            </div>
                           
                            <button type="Change" name="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
    <?php include "include/footer.php" ?>
    </body>
</html>
