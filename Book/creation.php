<?php 
require_once('../config.php');
require_once('../backend/book.php');
if (!isset($_SESSION['user'])) {
    header('location:../Auth/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/creation.css">
     <link rel="stylesheet" href="../styles/index.css">
     <script src="../script/creation.js" defer></script>
    <title>Document</title>
</head>
<body>

<?php include_once('../Nav.php')?>
    <p class="bigp">Add Book</p>
    <div class="home">
 <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" id="" placeholder="Name of book" class="nam">
        <p><?php echo $error['name']  ?></p>
        <input type="text" name="about" id="" placeholder="About the book" class="nam">
        <p><?php echo $error['about'] ?></p>

         <input type="text" name="genre" id="" placeholder="Genre the book" class="nam">
        <p><?php echo $error['genre'] ?></p>


        
       

  <p class="diplay-bookname"></p>

  <div class="combine">
        <p class="fake-upload">choose Book</p>
        
        
       <p class="choose-pic">choose picture of Book</p>     
       
  </div>
   <p><?php echo $error['image']; ?></p>
    
       <img src="" alt="" class="preview">

        <div>
            <button class="save" name="save">save</button>
        </div>

        <input type="file" name="book" id="" class="file" >
        <input type="file" name="pic"id="" class="pic">
        
 </form>
    </div>
</body>
</html>