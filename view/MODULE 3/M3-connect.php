<?php
$con=new mysqli('localhost', 'root', '','edusearch');

if(!$con){
    die(mysqli_error($con));
}