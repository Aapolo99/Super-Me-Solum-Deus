<?php 

if($_POST){

    $id=(isset($_POST['id'])?$_POST['id']:"");
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
      $stm=$conex->prepare("INSERT INTO listasprecios (id,nombre_lista,plato,precio)
      values (:id,:nombre_lista,:plato,:precio)");
      $stm->bindparam(":id",$id);
      $stm->bindparam(":nombre_lista",$Nombre_Lista);
      $stm->bindparam(":plato",$Plato);
      $stm->bindparam(":precio",$Precio);
      $stm->execute();

      echo'<script type="text/javascript">
      alert("Lista Creada Exitosamente");
      window.location.href="lista.php";
      </script>';
      }
  }

?>


<!-- Modal CREATE-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <input type="int" class="form-control" name="id" placeholder="Numero Plato" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="nombre_lista" placeholder="Nombre Lista" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="plato" placeholder="Plato" value="" autocomplete="off" required/>
        <br>
        <input type="decimal" class="form-control" name="precio" placeholder="Precio" value="" autocomplete="off" required/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>