<?php
//  include 'conn.php';
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crudd";
$con= mysqli_connect('localhost','root','','crudd');
mysqli_select_db($con,'crudtable');
// if($con){
//     echo "connected";

// }else{
//     echo"not connected";
// }
if(isset($_POST['done'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $q="select * from crudtable";
    $queryy=mysqli_query($con,$q);

 }
 ?>
<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
    

    <div class="container">
      <div class="col-lg-12">
          <br>
          <h1 class="text-warning text-center"> Display Table Data</h1>
          <br>
          <form action="display.php" method="post">
        <input type="textbox" name="str"/>
        <input type="submit" name="submit" value="search"/>
    </form>
    <table class="table table-striped table-hover table-bordered">
              <tr class="text-white bg-dark text-center">
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
</tr>
</table>
    <?php
    if(isset($_POST['submit'])){
        $str=$_POST['str'];
 $qq1="select * from crudtable where name like '%$str%'";
 $query1=mysqli_query($con,$qq1);
        if(mysqli_num_rows($query1)>0){
        echo "data found ";
      while($res2=mysqli_fetch_array($query1)){
         ?>
<table class="table" border="2">
              <tr class="text-blak bg-light text-center">
                 <td><?php echo $res2['id']; ?></td>
                <td><?php echo $res2['name'];?></td>
                <td><?php echo $res2['password'];?></td>
              
                </tr>
      </table>
         <?php     
      }
        
    }
    else{
        echo"no data found";
    }
    }
?>



          <table class="table table-striped table-hover table-bordered">
              <tr class="text-white bg-dark text-center">
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Delete</th>
                  <th>Update</th>
              </tr>
              <?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crudd";
$con= mysqli_connect('localhost','root','','crudd');
mysqli_select_db($con,'crudtable');


     $q="select * from crudtable";
    
     $queryy=mysqli_query($con,$q);
    


    while($res=mysqli_fetch_array($queryy)){

 ?>
              <tr class="text-center">
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['password'];?></td>
                <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
                <td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</a></button></td>

              </tr>
              <?php
}
              ?>
          </table>
           </div>
            </div>
        </form>

    </div>
</body>
</html>