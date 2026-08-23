<?php
require_once('config.php');
require_once('./backend/book.php');
require_once('./backend/auth.php');
 $books=selection();

if (!isset($_SESSION['user'])){
    header("location:Auth/login.php");

};

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

<p class="reco">Recommended</p>

<div class="full">
 
<?php foreach ($books as $book) { ?>
    <div class="entire">

                <img src="./uploaded_images/<?php echo $book['image']?>" alt="" srcset="" class="ggs">

                <div class="backg">

                <div class="words">
                    <p class="word1">Name: <?php echo $book['name_book'] ?></p>

                    <p class="word2">author:<?php echo owner($book['owner']) ?></p>
                </div>

                <p class="abu">About: <?php echo $book['about'] ?></p>

                <p class="gena">Genre: <?php echo $book['genre'] ?></p>

                <p class="own">owner:<?php echo owner($book['owner']) ?></p>

                <div class="boxes">
                    <p class="brr">borrow book</p>
                    <p class="down">Download</p>
                </div>

                </div>

        </div>
<?php }?>


         
</div>

<div class="space-up"></div>

<p class="trend">Trending</p>

<div class="trending">

        


        

</div>


</body></html>