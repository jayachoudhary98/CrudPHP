<?php
//  include 'conn.php';
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
if(isset($_POST['done'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $q="INSERT INTO crudtable( name, password) VALUES ('$username','$password') ";
    $queryy=mysqli_query($con,$q);

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-lg-6 m-auto ">
        <form action="" method="post">
            <br><br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white">Insertion Operation </h1>
                </div>
                <br>
                   <label for="">Username:</label>
                   <input type="text" name="username" class="form-control"><br>

                   <label for="">Password:</label>
                   <input type="password" name="password" class="form-control"><br>
                   <button class="btn btn-success" type="submit" name="done">Submit</button><br>
            </div>
        </form>

    </div>
</body>
</html>