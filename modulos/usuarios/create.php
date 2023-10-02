<?php 

if($_POST){

    $id_usuario=(isset($_POST['id_usuario'])?$_POST['id_usuario']:"");
    $Nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
    $Apellido=(isset($_POST['Apellido'])?$_POST['Apellido']:"");
    $Direccion=(isset($_POST['Direccion'])?$_POST['Direccion']:"");
    $Contacto=(isset($_POST['Contacto'])?$_POST['Contacto']:"");
    $Email=(isset($_POST['Email'])?$_POST['Email']:"");
    $Contrasena=(isset($_POST['Contrasena'])?$_POST['Contrasena']:"");

    $stm=$conex->prepare("INSERT INTO usuarios (id_usuario,Nombre,Apellido,Direccion,Contacto,Email,Contrasena)
    values (:id_usuario,:Nombre,:Apellido,:Direccion,:Contacto,:Email,:Contrasena)");
    $stm->bindparam(":id_usuario",$id_usuario);
    $stm->bindparam(":Nombre",$Nombre);
    $stm->bindparam(":Apellido",$Apellido);
    $stm->bindparam(":Direccion",$Direccion);
    $stm->bindparam(":Contacto",$Contacto);
    $stm->bindparam(":Email",$Email);
    $stm->bindparam(":Contrasena",$Contrasena);
    $stm->execute();

    header("location:user.php");

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
        <input type="int" class="form-control" name="id_usuario" placeholder="Numero identificacion" value="">
        <br>
        <input type="tex" class="form-control" name="Nombre" placeholder="Nombre" value="">
        <br>
        <input type="tex" class="form-control" name="Apellido" placeholder="Apellido" value="">
        <br>
        <input type="tex" class="form-control" name="Direccion" placeholder="Direccion" value="">
        <br>
        <input type="tex" class="form-control" name="Contacto" placeholder="numero de contacto" value="">
        <br>
        <input type="tex" class="form-control" name="Email" placeholder="Email" value="">
        <br> 
        <input type="tex" class="form-control" name="Contrasena" placeholder="Contraseña" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>