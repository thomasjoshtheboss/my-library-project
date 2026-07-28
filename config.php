<?php 

$connect=mysqli_connect('localhost','root','','my_library');

session_start();

if ($connect) {
    echo "Connected to SQL";
}