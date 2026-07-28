<?php 

$connect=mysqli_connect('localhost','root','','my_library');


if ($connect) {
    echo "Connected to SQL";
}