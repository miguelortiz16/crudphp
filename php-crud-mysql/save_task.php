<?php
include("db.php");
if (isset($_POST['save_task'])) {

   $nombre=$_POST['nombre'];
   $SKU=$_POST['SKU'];
   $idTienda=$_POST['idTienda'];
   $descripcion=$_POST['descripcion'];
   $valor=$_POST['valor'];
   $tienda=$_POST['tienda'];
   $imagen=$_POST['imagen'];

   
  $query="INSERT INTO producto(nombre,SKU,idTienda,descripcion,valor,tienda,imagen) value ( '$nombre',' $SKU', '$idTienda',' $descripcion', '$valor','$tienda', ' $imagen') ";

  $result=mysqli_query($conn,$query);
  if (!$result) {
     die("query failed");

  }

  $_SESSION['message']="tarea guardada exitosamente";
  $_SESSION['message_type']='success';
header("location: index.php");

}
?>