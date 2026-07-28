<?php
require_once("../config.php");
require_once('../backend/Auth.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link rel="stylesheet" href="../styles/auth.css">
</head>
<body>
    <div class="whole">
        <p class="head">Registration</p>
        <form method="POST">
        <div>
            <input type="text" name="name" placeholder="enter name" value="<?php echo  $name?>" class="authInput">
            <p><?php echo $error['name'] ?></p>
        </div>
        <div>
            <input type="text" name="email" placeholder="enter Email" value="<?php echo  $email?>" class="authInput">
            <p><?php echo $error['email'] ?></p>
        </div>
       <div>
         <input type="text" name="password" placeholder="enter password" class="authInput">
         <p><?php echo $error['password'] ?></p>
       </div>
        <div>
            <input type="text" name="confirm_password" placeholder="confirm password" class="authInput">
            <p><?php echo $error['confirm_password'] ?></p>
        </div>
        <div class="check">
        <input type="checkbox" name="checkbox" id="" class="checkbox">
        <p class="check1">i accept all items & conditions</p>
        </div>
        <button class="regButton" name="register">Register now</button>
<p class="login">Already have an account?<a href="./login.php">login</a></p>
</form>
    </div>

</body>
</html>