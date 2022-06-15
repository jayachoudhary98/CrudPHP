<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crudd";
$con= mysqli_connect('localhost','root','','crudd');
mysqli_select_db($con,'crudtable');
if($con){
    echo "connected";

}else{
    echo"not connected";
}
?>