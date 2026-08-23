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
 

            
            <div class="entire">

            <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

            <div class="backg">

            <div class="words">
                <p class="word1">Name:Stand off</p>

                <p class="word2">author: Alexis</p>
            </div>

            <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

            <p class="gena">Genra: comedy</p>

            <p class="own">owner:alexis</p>

            <div class="boxes">
                <p class="brr">borrow book</p>
                <p class="down">Download</p>
            </div>

            </div>

            </div>


            <div class="entire">

            <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

<<<<<<< Updated upstream
            <div class="backg">
=======
 <div class="mmm">
 <?php foreach ($books as $not) {?>
    <div class="bod"><img src="./uploaded_images/<?php echo $not['image'] ?>" alt="" class="saki"></div>
 <div class="gom"> 
<p class="tag">Name:  <i class="saka"><?php echo $not['name_book'] ?></i></p>
>>>>>>> Stashed changes

            <div class="words">
                <p class="word1">Name:Stand off</p>

<<<<<<< Updated upstream
                <p class="word2">author: Alexis</p>
            </div>

            <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

            <p class="gena">Genra: comedy</p>

            <p class="own">owner:alexis</p>

            <div class="boxes">
                <p class="brr">borrow book</p>
                <p class="down">Download</p>
            </div>

            </div>

            </div>

        <div class="entire">

        <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

        <div class="backg">

        <div class="words">
            <p class="word1">Name:Stand off</p>

            <p class="word2">author: Alexis</p>
        </div>

        <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

        <p class="gena">Genra: comedy</p>

        <p class="own">owner:alexis</p>

        <div class="boxes">
            <p class="brr">borrow book</p>
            <p class="down">Download</p>
        </div>

        </div>

        </div>

        <div class="entire">

        <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

        <div class="backg">

        <div class="words">
            <p class="word1">Name:Stand off</p>

            <p class="word2">author: Alexis</p>
        </div>

        <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

        <p class="gena">Genra: comedy</p>

        <p class="own">owner:alexis</p>

        <div class="boxes">
            <p class="brr">borrow book</p>
            <p class="down">Download</p>
        </div>

        </div>

        </div>
=======
   <div class="kol">
   <button class="loop">Borrow book</button>
   <a href="upload_book/<?php echo $not['book'] ?>"  download><button class="loo">Download</button></a>
   <p> <?php echo owner($not['owner']); ?></p>
   </div>
<?php } ?>
 
</div>
>>>>>>> Stashed changes



</div>

<div class="space-up"></div>

<p class="trend">Trending</p>

<div class="trending">

        


        <div class="entire">



            <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

            <div class="backg">

            <div class="words">
                <p class="word1">Name:Stand off</p>

                <p class="word2">author: Alexis</p>
            </div>

            <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

            <p class="gena">Genra: comedy</p>

            <p class="own">owner:alexis</p>

            <div class="boxes">
                <p class="brr">borrow book</p>
                <p class="down">Download</p>
            </div>

            </div>

        </div>

        <div class="entire">

                <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

                <div class="backg">

                <div class="words">
                    <p class="word1">Name:Stand off</p>

                    <p class="word2">author: Alexis</p>
                </div>

                <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

                <p class="gena">Genra: comedy</p>

                <p class="own">owner:alexis</p>

                <div class="boxes">
                    <p class="brr">borrow book</p>
                    <p class="down">Download</p>
                </div>

                </div>

        </div>

        <div class="entire">

                <img src="../my-library-project/upload_bookWIN_20260718_16_29_08_Pro.jpg" alt="" srcset="" class="ggs">

                <div class="backg">

                <div class="words">
                    <p class="word1">Name:Stand off</p>

                    <p class="word2">author: Alexis</p>
                </div>

                <p class="abu">About: Lorem ipsum, dolor sit amet <br> consectetur adipisicing.</p>

                <p class="gena">Genra: comedy</p>

                <p class="own">owner:alexis</p>

                <div class="boxes">
                    <p class="brr">borrow book</p>
                    <p class="down">Download</p>
                </div>

                </div>

        </div>

</div>


</body></html>