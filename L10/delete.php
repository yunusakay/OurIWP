<?php
include("connect.php");
$userID=$_GET['u_id'];
$sQlDelete="delete from users where userID=$userID";
if (mysqli_query($conn,$sQlDelete)){
   echo "Deleting is successful.";
}
else{
   echo "Deleting error.";
}
header("refresh:1;url=p1.php");
?>