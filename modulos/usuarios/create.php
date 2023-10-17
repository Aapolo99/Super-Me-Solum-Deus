<?php 

if($_POST){

    $id_usuario=(isset($_POST['id_usuario'])?$_POST['id_usuario']:"");
    $Nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
    $Apellido=(isset($_POST['Apellido'])?$_POST['Apellido']:"");
    $Direccion=(isset($_POST['Direccion'])?$_POST['Direccion']:"");
    $Contacto=(isset($_POST['Contacto'])?$_POST['Contacto']:"");
    $Email=(isset($_POST['Email'])?$_POST['Email']:"");
    $Contrasena=(isset($_POST['Contrasena'])?$_POST['Contrasena']:"");
    $ID_Rol=(isset($_POST['ID_Rol'])?$_POST['ID_Rol']:"");

    $validar = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario' || email = '$Email'";
    $validando = $conex->query($validar);
    if ($validando->rowCount() > 0){
      while ($row = $validando->fetch(PDO::FETCH_ASSOC)) {
      echo'<script type="text/javascript">
      alert("El Usuario Y/O Email Ya Se Encuentra Registrado.");
      window.location.href="user.php";
      </script>';
      }
    }else{
      $stm=$conex->prepare("INSERT INTO usuarios (id_usuario,Nombre,Apellido,Direccion,Contacto,Email,Contrasena,ID_Rol)
      values (:id_usuario,:Nombre,:Apellido,:Direccion,:Contacto,:Email,:Contrasena,:ID_Rol)");
      $stm->bindparam(":id_usuario",$id_usuario);
      $stm->bindparam(":Nombre",$Nombre);
      $stm->bindparam(":Apellido",$Apellido);
      $stm->bindparam(":Direccion",$Direccion);
      $stm->bindparam(":Contacto",$Contacto);
      $stm->bindparam(":Email",$Email);
      $stm->bindparam(":Contrasena",$Contrasena);
      $stm->bindparam(":ID_Rol",$ID_Rol);
      $stm->execute();

    echo'<script type="text/javascript">
    alert("Usuario Creado Exitosamente");
    window.location.href="../../user.php";
    </script>';
        }
/*
    header("location:user.php");
*/
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
        <input type="int" class="form-control" name="id_usuario" placeholder="Numero identificacion" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Nombre" placeholder="Nombre" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Apellido" placeholder="Apellido" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Direccion" placeholder="Direccion" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Contacto" placeholder="numero de contacto" value="" autocomplete="off" required/>
        <br>
        <input type="tex" class="form-control" name="Email" placeholder="Email" value="" autocomplete="off" required/>
        <br> 
        <input type="tex" class="form-control" name="Contrasena" placeholder="Contraseña" value="" autocomplete="off" required/>
        <br> 
        <input type="tex" class="form-control" name="ID_Rol" placeholder="Rol" value="" autocomplete="off" required/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>