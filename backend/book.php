<?php

$name_book='';
$about='';
$genre='';
$image='';
$error=['name'=>'','about'=>'','genre'=>'','image'=>'','file'=>''];
function creation(){
    global $connect,$error,$name_book,$about,$image,$genre;
  if (isset($_POST['save'])) {
    if(strlen($_POST['name'])<5){
     $error['name']='write the name of the book';
     
    }else{
        $error['name']='';
        $name_book=$_POST['name'];
    }
    if (strlen($_POST['about'])<9) {
        $error['about']='Please with what the boot if about';
        
    }else {
          $error['abput']='';
        $about=$_POST['about'];
    }

    if (empty($_POST['genre'])) {
      $error['genre']='Please write the type of book';
      
    }else {
      $error['genre']='';
        $genre=$_POST['genre'];
    }
   $pic=$_FILES['pic'];
   echo $pic['type'];

   $allowed_ext=['png','jpeg','jpg'];
    if (!str_starts_with($pic['type'],'image')) {
        $error['image']='this is not an image ';
        
    }else{
          $error['image']='';
    }
   $path=pathinfo($pic['name'],PATHINFO_EXTENSION);

    if (!in_array($path,$allowed_ext)) {
    $error['image']='we dont use this type of extrnsion';
   }else {
    $error['image']='';
   }
  

   $stri=[];
   while (count($stri)<5) {
    $re=rand(0,9);
    array_push($stri,$re);
   }

  
   $picName=implode('',$stri).'.'.$path;
  
    $folder="../uploaded_images/".$picName;

 if (empty(array_filter($error))) {
 move_uploaded_file($pic['tmp_name'],$folder);

  $book= $_FILES['book'];
    
 $bookfol='../upload_book/'.$book['name'];
  move_uploaded_file($book['tmp_name'],$bookfol);

  $bookname=$book['name'];
  $userid= $_SESSION['user']['id'];
  var_dump($userid);
  $insert="INSERT INTO book (owner,name_book,about,image,genre,book) VALUES('$userid','$name_book','$about','$picName','$genre', '$bookname')";
  $rt= mysqli_query($connect,$insert);
    if ($rt) {
     
      header('location:../index.php');
    }

   
   } 
   





  
  }



}
creation();