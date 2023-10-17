
<?php include("conexion.php"); 


if(isset($_GET['id_usuario'])){

    $txtid=(isset($_GET['id_usuario'])?$_GET['id_usuario']:"");
    $stm=$conex->prepare("SELECT * FROM usuarios WHERE id_usuario=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $txtid=$registro['id_usuario'];
    $Nombre=$registro['Nombre'];
    $Apellido=$registro['Apellido'];
    $Direccion=$registro['Direccion'];
    $Contacto=$registro['Contacto'];
    $Email=$registro['Email'];
    $Contrasena=$registro['Contrasena'];
    $ID_Rol=$registro['ID_Rol'];
}

/* Guardar cambios editados  */

if($_POST){

  $id_usuario=(isset($_POST['id_usuario'])?$_POST['id_usuario']:"");
  $Nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
  $Apellido=(isset($_POST['Apellido'])?$_POST['Apellido']:"");
  $Direccion=(isset($_POST['Direccion'])?$_POST['Direccion']:"");
  $Contacto=(isset($_POST['Contacto'])?$_POST['Contacto']:"");
  $Email=(isset($_POST['Email'])?$_POST['Email']:"");
  $Contrasena=(isset($_POST['Contrasena'])?$_POST['Contrasena']:"");
  $ID_Rol=(isset($_POST['ID_Rol'])?$_POST['ID_Rol']:"");
  print_r($_POST);
  $stm=$conex->prepare("UPDATE usuarios SET Nombre=:Nombre,Apellido=:Apellido,Direccion=:Direccion,Contacto=:Contacto,Email=:Email,Contrasena=:Contrasena,ID_Rol=:ID_Rol WHERE id_usuario=:id_usuario");
  $stm->bindParam(":id_usuario",$id_usuario);
  $stm->bindParam(":Nombre",$Nombre);
  $stm->bindParam(":Apellido",$Apellido);
  $stm->bindParam(":Direccion",$Direccion);
  $stm->bindParam(":Contacto",$Contacto);
  $stm->bindParam(":Email",$Email);
  $stm->bindParam(":Contrasena",$Contrasena);
  $stm->bindParam(":ID_Rol",$ID_Rol);
  $stm->execute();
  print_r($_POST);
  print_r($_GET);

  echo'<script type="text/javascript">
    alert("Usuario Actualizado Exitosamente");
    window.location.href="user.php";
    </script>';
/*
  header("location:user.php");
*/
}

?>


<?php include("../../template/headerUser.php")?>

    <form action="" method="post">
     
<div class="modal-body">

        <input type="hidden" class="form-control" name="id_usuario" autocomplete="off" required value="<?php echo $txtid; ?> ">
        <br>
        <input type="text" class="form-control" name="Nombre" autocomplete="off" required placeholder="Nombre" value="<?php echo $Nombre; ?>">
        <br>
        <input type="text" class="form-control" name="Apellido" autocomplete="off" required placeholder="Apellido" value="<?php echo $Apellido; ?>">
        <br>
        <input type="text" class="form-control" name="Direccion" autocomplete="off" required placeholder="Direccion" value="<?php echo $Direccion; ?>">
        <br>
        <input type="int" class="form-control" name="Contacto" autocomplete="off" required placeholder="numero de contacto" value="<?php echo $Contacto; ?>">
        <br>
        <input type="email" class="form-control" name="Email" autocomplete="off" required placeholder="Email" value="<?php echo $Email; ?>">
        <br> 
        <input type="password" class="form-control" name="Contrasena" autocomplete="off" required placeholder="Contraseña" value="<?php echo $Contrasena; ?>">
        <br>
        <input type="int" class="form-control" name="ID_Rol" autocomplete="off" required placeholder="Rol" value="<?php echo $ID_Rol; ?>">
      </div>
      <div class="modal-footer">
        <a href="user.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>


    <?php include("../../template/footerUser.php")?>
