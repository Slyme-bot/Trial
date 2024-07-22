<?php
include ('home.php');

if(!isLoggedIn()){
    $_SESSION['msg'] = 'You must be logged in first';
    header('location: login.php'); 
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
        <div class="header">
            <h2>Home Page</h2>
        </div>

        <div class="content">
            <!--Notification Message-->
            <?php if(isset($_SESSION['success'])) :?>
            <div class="error_success">
                <h3>
                    <?php

                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif ?>
            <!--Logged in user information-->
            <div class="profile_info">
                <img src="">
                
            </div>
        </div>

    </body>
</html>