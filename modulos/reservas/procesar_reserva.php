<?php

if($_POST){

    $id_usuario=(isset($_POST['id_usuario'])?$_POST['id_usuario']:"");
    $NombreApellido=(isset($_POST['NombreApellido'])?$_POST['NombreApellido']:"");
    $id_mesa=(isset($_POST['id_mesa'])?$_POST['id_mesa']:"");
    $fecha_hora=(isset($_POST['fecha_hora'])?$_POST['fecha_hora']:"");
    $Personas=(isset($_POST['Personas'])?$_POST['Personas']:"");

    $validar = "SELECT * FROM reservas WHERE id_usuario = '$id_usuario' && fecha_hora = '$fecha_hora'";
    $validando = $conex->query($validar);
    if ($validando->rowCount() > 0){
      while ($row = $validando->fetch(PDO::FETCH_ASSOC)) {
      echo'<script type="text/javascript">
      alert("El Usuario Y/O Email Ya Cuenta Con Una Reserva Para El Día Seleccionado.");
      window.location.href="reservas.php";
      </script>';
      }
    }else{
      $stm=$conex->prepare("INSERT INTO reservas (id_usuario,NombreApellido,id_mesa,fecha_hora,Personas)
    values (:id_usuario,:NombreApellido,:id_mesa,:fecha_hora,:Personas)");
    $stm->bindparam(":id_usuario",$id_usuario);
    $stm->bindparam(":NombreApellido",$NombreApellido);
    $stm->bindparam(":id_mesa",$id_mesa);
    $stm->bindparam(":fecha_hora",$fecha_hora);
    $stm->bindparam(":Personas",$Personas);
    $stm->execute();

    echo'<script type="text/javascript">
    alert("Reserva Creada Exitosamente.");
    window.location.href="reservas.php";
    </script>';
/*
    header("location:reservas.php");
*/
}
}

?>


<!-- Modal CREATE-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <input type="int" class="form-control" name="id_usuario" placeholder="Numero identificacion" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="NombreApellido" placeholder="Nombre" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="id_mesa" placeholder="Mesa" value="" autocomplete="off" required/>
        <br>
        <input type="date" class="form-control" name="fecha_hora" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Personas" placeholder="#comensales" value=""autocomplete="off" required/>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>
