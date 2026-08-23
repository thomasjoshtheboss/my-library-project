<?php
require_once('config.php');
require_once('./backend/book.php');
require_once('./backend/auth.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>Document</title>
</head>
<body>


    
<?php include_once('Nav.php')?>



<div class="as">
 <p class="jjp">Recent books</p>
<div class="bodyq">


 <div class="mmm">
 <?php $select="SELECT name_book,about,image,genre,book FROM book ";
 $my=mysqli_query($connect,$select);
 $not=mysqli_fetch_assoc($my);
 ?>
 <div class="bod"><img src="./uploaded_images/<?php echo $not['image'] ?>" alt="" class="saki"></div>
 <div class="gom"> 
<p class="tag">Name:  <i class="saka"><?php echo $not['name_book'] ?></i></p>

   <p class="tag1">about: <?php echo $not['about'] ?>   </p>
   <p>genre: <?php echo $not['genre'] ?>  </p>
   <p class="tag2">Rating: 9.5/10</p>

   <div class="kol">
   <button class="loop">Borrow book</button>
   <a href="upload_book/<?php echo $not['book'] ?>"  download><button class="loo">Download</button></a>
   
   </div>
</div>

</div>


</div>

</body>
</html>