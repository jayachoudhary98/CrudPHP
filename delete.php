<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crudd";
$con= mysqli_connect('localhost','root','','crudd');
mysqli_select_db($con,'crudtable');

$id= $_GET['id'];

     $q="delete from crudtable where id=$id";
    $queryy=mysqli_query($con,$q);
    header('location:display.php');
?>