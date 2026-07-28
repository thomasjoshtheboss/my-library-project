<?php 
$name='';
$password='';
$email='';
$comfirm_password='';

$error=['name'=>'','email'=>'','password'=>'','confirm_password'=>''];


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) < 5) {
        $error['name']='Name must be greater than 5 characters';
    }else{$name=strip_tags(stripcslashes(htmlspecialchars($_POST['name']))); }
   
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $error['email']='Email must be Validated';
    }else{
       $email= strip_tags(stripcslashes(htmlspecialchars($_POST['email'])));
    }
    if (strlen($_POST['password']) < 8) {
        $error['password']='Password must be greater than eight characters';
    }else{
     $password=strip_tags(stripcslashes(htmlspecialchars($_POST['password'])));
    }
    if ($_POST['confirm_password'] !== $_POST['password']) {
        $error['confirm_password']='Passwords do not match';
    }
    $pass=md5($password);

if (empty(array_filter($error))) {
     $insert="INSERT INTO user(name,email,password) VALUES('$name','$email','$pass') ";

   $rt= mysqli_query($connect,$insert);
   echo $rt;


   if ($rt) {

    $_SESSION['user']=['name'=>$name,'email'=>$email];
       header('location:../index.php');
   }else{}

}
   
   


}




//login

$email_log='';
$password_log='';


if (isset($_POST['login'])) {
    echo 'helo';
}




