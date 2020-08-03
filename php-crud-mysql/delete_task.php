<?php
include("db.php");

if(isset($_GET['SKU'])){
    $id=$_GET['SKU'];

    $query="DELETE FROM producto WHERE SKU=$id";
    $result=mysqli_query($conn,$query);
    if (!$result) {
       die("query failed");
  
    }
$_SESSION['message']='Task removed successfully';
$_SESSION['message_type']='danger';

 header("Location: index.php");
}

?>