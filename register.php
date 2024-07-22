<?php
include('home.php')
?>
<!doctype html>
<html>
    <head>
        <title>Registration System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="register.php">
        <?php echo display_error(); ?>
            <div class="input-group">
                <label>Username</label> 
                <input type="text" placeholder="Enter your username" name="username" value="<?php echo $username;?>" required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" placeholder="john.doe@gmail.com" name="email" value="<?php echo $email ?>" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="***********" name="password_1" value="" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" placeholder="***********" name="password_2" value="" required>
            </div>
            <div class="input-group">
                <button type="submit" name="register_btn" class="btn">Register</button>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
        </form>
    </body>
</html>