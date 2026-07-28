<?php 
require_once('../config.php');
require_once('../backend/Auth.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/auth.css">
</head>
<body>
    <div class="whole">
        <p class="head">Login</p>
        <form method="POST">
       
        <div>
            <input type="text" name="email" placeholder="enter Email" value="<?php echo  $email?>" class="authInput">
            <p><?php echo $error['email'] ?></p>
        </div>
       <div>
         <input type="text" name="password" placeholder="enter password" class="authInput">
         <p><?php echo $error['password'] ?></p>
       </div>
       
       
        <button class="regButton" name="register">Login</button>
<p class="login">Already have an account?<a href="./register.php">register</a></p>
</form>
    </div>
</body>
</html>