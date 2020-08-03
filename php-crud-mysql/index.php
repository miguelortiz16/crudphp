<?php include("db.php")


?>
<?php include("includes/header.php") ?>

<div class="row">
    <div class="col-md-4">
        <?php 
        if (isset($_SESSION['message'])) {

         
        
        ?>
        <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
<?=  $_SESSION['message']  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <?php   session_unset();} ?>

    <div class="card card-body">
<form action="save_task.php" method="POST">
    <div class="form-group">
        <input type="text" name="nombre" class="form-control"
        placeholder="nombre" autofocus>
    </div>
    <div class="form-group">
        <textarea name="SKU"  rows="2"  class="form-control"
        placeholder="SKU"></textarea>

    </div>
    <div class="form-group">
        <textarea name="idTienda"  rows="2"  class="form-control"
        placeholder="idTienda"></textarea>

    </div>
    <div class="form-group">
        <textarea name="descripcion"  rows="2"  class="form-control"
        placeholder="descripcion"></textarea>

    </div>
    <div class="form-group">
        <textarea name="valor"  rows="2"  class="form-control"
        placeholder="valor"></textarea>

    </div>
    <div class="form-group">
        <textarea name="tienda"  rows="2"  class="form-control"
        placeholder="tienda"></textarea>

    </div>
    <div class="form-group">
        <textarea name="imagen"  rows="2"  class="form-control"
        placeholder="imagen"></textarea>

    </div>
   <input type="submit" class="btn btn-success btn-block " name="save_task" value="Guardar"> 
</form>
    </div>
    </div>

    <div class="col-md-8">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>nombre</th>
            <th>sku</th>
            <th>idTienda </th>
            <th>Description</th>
            <th>valor</th>
            <th>Tienda</th>
            <th>imagen</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query="SELECT * FROM producto";
     $resul_tasks =mysqli_query($conn,$query);

     while ($row=mysqli_fetch_array($resul_tasks)) { ?>  
          <tr>
              <td><?php  echo $row['nombre']?></td>
              <td><?php  echo $row['SKU']?></td>
              <td><?php  echo $row['idTienda']?></td>
              <td><?php  echo $row['descripcion']?></td>
              <td><?php  echo $row['valor']?></td>
              <td><?php  echo $row['tienda']?></td>
              <td><?php  echo $row['imagen']?></td>
              <td>
                  <a href="edit.php?SKU=<?php echo $row['SKU']?>" 
                  class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="delete_task.php?SKU=<?php echo $row['SKU']?>"
                  class="btn btn-danger" >
                     <i class=" far fa-trash-alt"></i>
                  </a>
              </td>
          </tr>
         <?php } ?>
   
    </tbody>

</table>
    </div>


</div>

<?php include("includes/footer.php") ?>