
<?php include("../../conexion.php"); 


if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conex->prepare("SELECT * FROM listasprecios WHERE id=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $Nombre_Lista=$registro['nombre_lista'];
    $Plato=$registro['plato'];
    $Precio=$registro['precio'];
}

/* Guardar cambios editados  */

if($_POST){

  $txtid=(isset($_POST['txtid'])?$_POST['txtid']:"");
  $Nombre_Lista=(isset($_POST['nombre_lista'])?$_POST['nombre_lista']:"");
  $Plato=(isset($_POST['plato'])?$_POST['plato']:"");
  $Precio=(isset($_POST['precio'])?$_POST['precio']:"");

  $validar = "SELECT * FROM listasprecios WHERE id = '$id'";
    $validando = $conex->query($validar);
    if ($validando->rowCount() > 0){
      while ($row = $validando->fetch(PDO::FETCH_ASSOC)) {
      echo'<script type="text/javascript">
      alert("El Número De Plato Ya Se Encuentra Registrado.");
      window.location.href="createLista.php";
      </script>';
      }
    }else{
      $stm=$conex->prepare("UPDATE listasprecios SET nombre_lista=:nombre_lista,plato=:plato,precio=:precio WHERE id=:txtid");
      $stm->bindParam(":txtid",$txtid);
      $stm->bindParam(":nombre_lista",$Nombre_Lista);
      $stm->bindParam(":plato",$Plato);
      $stm->bindParam(":precio",$Precio);
      $stm->execute();

      echo'<script type="text/javascript">
      alert("Lista De Precios Actualizada Exitosamente");
      window.location.href="lista.php";
      </script>';
      }
  }

?>


<?php include("../../template/headerUser.php")?>

    <form action="" method="post">
     
<div class="modal-body">

        <input type="int" class="form-control" name="txtid" autocomplete="off" required value="<?php echo $txtid; ?> ">
        <br>
        <input type="text" class="form-control" name="nombre_lista" autocomplete="off" required placeholder="Nombre Lista" value="<?php echo $Nombre_Lista; ?>">
        <br>
        <input type="text" class="form-control" name="plato" autocomplete="off" required placeholder="Plato" value="<?php echo $Plato; ?>">
        <br>
        <input type="text" class="form-control" name="precio" autocomplete="off" required placeholder="Precio" value="<?php echo $Precio; ?>">
      </div>
      <div class="modal-footer">
        <a href="lista.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>


    <?php include("../../template/footerUser.php")?>
