<?php 
require_once('../config.php');
require_once('../backend/Auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/creation.css">
     <link rel="stylesheet" href="../styles/index.css">
    <title>Document</title>
</head>
<body>

<?php include_once('../Nav.php')?>
    <p class="bigp">Add Book</p>
    <div class="home">
        <input type="text" name="name" id="" placeholder="Name of book" class="nam">
        <input type="text" name="about" id="" placeholder="About the book" class="nam">
        <input type="file" name="image" id="" class="img">
        <div>
            <button class="save">save</button>
        </div>
    </div>
</body>
</html>