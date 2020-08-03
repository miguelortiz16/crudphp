<?php
include("db.php");
if ($_GET['SKU']) {
    $id=$_GET['SKU'];
    $query="SELECT * FROM producto WHERE SKU=$id";
     $result=mysqli_query($conn,$query);

    if (mysqli_num_rows($result)==1) {
       $row=mysqli_fetch_array($result);
     

       $nombre=$row['nombre'];
       $SKU=$row['SKU'];
       $descripcion=$row['descripcion'];
       $idTienda=$row['idTienda'];
       $valor=$row['valor'];
       $tienda=$row['tienda'];
       $imagen=$row['imagen'];
    }
}

if (isset($_POST['update'])) {

    $nombre=$_POST['nombre'];
    $SKU=$_POST['SKU'];
    $idTienda=$_POST['idTienda'];
    $descripcion=$_POST['descripcion'];
    $valor=$_POST['valor'];
    $tienda=$_POST['tienda'];
    $imagen=$_POST['imagen'];


 $query="UPDATE producto set nombre='$nombre', SKU='$SKU', idTienda='$idTienda', descripcion='$descripcion', valor=' $valor', tienda='$tienda',imagen='$imagen' where id=$id";
 mysqli_query($conn,$query);

 $_SESSION['message']="task update";
 $_SESSION['message_type']='warning';
 header("Location:index.php");

}
?>
<?php include("includes/header.php")?>

<div class="container p-4">
    <div class=" row">
<div class="col-md-4 mx-auto">
    <div class="card card-body">
    <form action="edit.php?id=<?php echo $_GET['SKU'] ;?>" method="POST">
<div class="form-group">
    <input type="text" name="nombre" value=" <?php echo  $nombre?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="SKU" value=" <?php echo  $SKU?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="idTienda" value=" <?php echo $idTienda?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="descripcion" value=" <?php echo $descripcion?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="valor" value=" <?php echo  $valor?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="tienda" value=" <?php echo  $tienda?> " class="form-control" placeholder="Update title">

</div>
<div class="form-group">
    <input type="text" name="imagen" value=" <?php echo  $imagen?> " class="form-control" placeholder="Update title">

</div>

<button class="btn-success" name="update">
    Update
</button>
</form>
    </div> 
   

</div>


    </div>
</div>
<?php include("includes/footer.php") ?>