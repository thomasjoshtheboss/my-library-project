<?php 
$name='';
$password='';
$email='';
$comfirm_password='';

$error=['name'=>'','email'=>'','password'=>'','confirm_password'=>''];

function register()  {
    global $connect,$error,$name,$email,$password;
    if (isset($_POST['register'])) {
    if (strlen($_POST['name']) < 5) {
        $error['name']='Name must be greater than 5 characters';
        return false;
    }else{$name=strip_tags(stripcslashes(htmlspecialchars($_POST['name']))); }
   
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $error['email']='Email must be Validated';
              return false;
    }else{
       $email= strip_tags(stripcslashes(htmlspecialchars($_POST['email'])));
    }
    if (strlen($_POST['password']) < 8) {
        $error['password']='Password must be greater than eight characters';
              return false;
    }else{
     $password=strip_tags(stripcslashes(htmlspecialchars($_POST['password'])));
    }
    if ($_POST['confirm_password'] !== $_POST['password']) {
        $error['confirm_password']='Passwords do not match';
              return false;
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

}

register();


//login


function login()  {
    global $connect,$error,$email,$password;
if (isset($_POST['login'])) {
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $error['email']='Email is not validated';
        return false;
    }else{
        $email=$_POST['email'];
    }
    if ($_POST['password'] <8) {
        $error['password']='password must be 8 characters';
        return false;
    }else{
        $password=$_POST['password'];
    }
   
}
$pass=md5($password);
 $select="SELECT name,email FROM user WHERE email='$email' AND password='$pass'";
 $my=mysqli_query($connect,$select);
 $rows=mysqli_num_rows($my);
 if ($rows===0) {
    echo 'The User Does not exist';
 }else{
    $user=mysqli_fetch_assoc($my);

    $_SESSION['user']=$user;

     header('location:../index.php');
 }
}


login();


