<?php

$con=mysqli_connect("localhost","root","","jewelry");

if(mysqli_connect_error()){
    echo"Cannot connect to database";
    exit();
}
?>