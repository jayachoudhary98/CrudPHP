<?php
//  include 'conn.php';
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "crudd";
$con= mysqli_connect('localhost','root','','crudd');
mysqli_select_db($con,'crudtable');
$output ='';
if(isset($_POST['submit'])){
    $str=$_POST['str'];
    //  $username=$_POST['username'];
    //  $password=$_POST['password'];
    //  $q="select * from crudtable where name like '%$name%' or password like '%$password%' ";
    $qq="select * from crudtable where name like '%$str%'";

    $queryy=mysqli_query($con,$qq);
    if(mysqli_num_rows($queryy)>0){
        echo "yes";
      while($res=mysqli_fetch_array($queryy)){
         ?>
       <table border="5">
       <tr class="text-center">
        <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['password'];?></td>
        
                </tr>
       </table>
         <?php     
      }
        
    }
    else{
        echo"no data found";
    }
    // if($queryy==0){
    //     echo "There was no search found";
    // if($queryy == 0){
    //     $output = 'There was no search results!';
    // }
    
    // else{
    //     while($row = mysql_fetch_array($qq)){
    //         $fname = $row['name'];
           
    //         $output .= '<div>'.$fname.'</div>';
    //     }
     
}
      ?>
  
            <!-- // $username=$row['username'];
            // $password=$row['password'];
            // $id=$row['id'];
            // $output .="<div>".$username.''.$password. "</div>";
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="" method="post">
        <input type="textbox" name="str"/>
        <input type="submit" name="submit" value="search"/>
    </form>
    
</body>
</html>
<!-- <?php print("$output");
// header("Location: display.php");
?> -->