
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; border:2px solid Black; }
        body{display:flex; flex-direction:column; justify-content:center; align-items:center;}
    </style>
</head>
<body style="background-color:LightGoldenRodYellow;">

    <img src="logo-jkr.png" alt="" width="270" height="200">
    <div class="wrapper">
    <?php if (isset($_GET['logout'])) { ?>  <br>   
                    <div class="alert alert-info text-center text-danger" style="font-size: 15px;text-align: center; "><?php echo "You have logged out"; ?></div> <?php } ?>
        <h2>Login</h2>
        <?php if (isset($_GET['takde'])) { ?>  <br>   
                    <div class="alert alert-info text-center text-danger" style="font-size: 15px;text-align: center; "><?php echo "You have not registered"; ?></div> <?php } ?>
    
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="loginprocess.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="fuser" name="fuser" size="20" placeholder="Enter username">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" size="20" name="fpwd" id="fpwd" placeholder="Enter password">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>