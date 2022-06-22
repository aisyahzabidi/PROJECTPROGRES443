
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px verdana; } 
        body{display:flex; flex-direction:column; justify-content:center; align-items:center;}
        .wrapper{ width: 360px; padding: 20px; border:2px dark; }   
    </style>
</head>

<body style="background-color:LightGoldenRodYellow;">

    <img src="jkr_logo.png" alt="" width="200" height="200">

    <div class="wrapper">
        <h2>Register Account</h2>
        <p>Please fill in your credentials to create account.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="registerprocess.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="fuser" name="fuser" size="20" placeholder="Enter username" required>
                
            </div>    
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="fname" name="fname" size="20" placeholder="Enter full name" required>
                
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" size="20" name="fpwd" id="fpwd" placeholder="Enter password" required>
                
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" size="20" name="fphone" id="fphone" placeholder="Enter phone number" required>
                
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" size="20" name="femail" id="femail" placeholder="Enter email address" required>
                  
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create Account">
            </div>
            <p>Already have an account? <a href="loginpage.php">Login now</a>.</p>

        </form>
    </div>
  
</body>
</html>
