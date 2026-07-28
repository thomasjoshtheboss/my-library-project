<?php 
$name=strip_tags(stripcslashes(htmlspecialchars('name')));
$password=strip_tags(stripcslashes(htmlspecialchars('password')));
$email=strip_tags(stripcslashes(htmlspecialchars('email')));
$comfirm_password=strip_tags(stripcslashes(htmlspecialchars('password')));
$error=['name'=>'','email'=>'','password'=>'','comfirm_password'=>''];


//if (isset($_POST['register'])) {
    if (strlen($name) < 5) {
        $error['name']='Name must be greater than 5 characters';
    }
   
    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error['email']='Email must be Validated';
    }
    if (strlen($password) < 8) {
        $error['password']='Password must be greater than eight characters';
    }
    if ($comfirm_password !== $password) {
        $error['comfirm_password']='Passwords do not match';
    }
//}

var_dump($error);


