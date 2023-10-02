
<?php include("../../conexion.php"); 

/* Eliminar Registro  */
if(isset($_GET['id_usuario'])){

    $txtid=(isset($_GET['id_usuario'])?$_GET['id_usuario']:"");
    $stm=$conex->prepare("SELECT * FROM usuarios WHERE id_usuario=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $Nombre=$registro['Nombre'];
    $Apellido=$registro['Apellido'];
    $Direccion=$registro['Direccion'];
    $Contacto=$registro['Contacto'];
    $Email=$registro['Email'];
    $Contrasena=$registro['Contrasena'];
}

/* Guardar cambios editados  */

if($_POST){

  $txtid=(isset($_POST['txtid'])?$_POST['txtid']:"");
  $Nombre=(isset($_POST['Nombre'])?$_POST['Nombre']:"");
  $Apellido=(isset($_POST['Apellido'])?$_POST['Apellido']:"");
  $Direccion=(isset($_POST['Direccion'])?$_POST['Direccion']:"");
  $Contacto=(isset($_POST['Contacto'])?$_POST['Contacto']:"");
  $Email=(isset($_POST['Email'])?$_POST['Email']:"");
  $Contrasena=(isset($_POST['Contrasena'])?$_POST['Contrasena']:"");

  $stm=$conex->prepare("UPDATE usuarios SET Nombre=:Nombre,Apellido=:Apellido,Direccion=:Direccion,Contacto=:Contacto,Email=:Email,Contrasena=:Contrasena WHERE id_usuario=:txtid");
  $stm->bindParam(":txtid",$txtid);
  $stm->bindParam(":Nombre",$Nombre);
  $stm->bindParam(":Apellido",$Apellido);
  $stm->bindParam(":Direccion",$Direccion);
  $stm->bindParam(":Contacto",$Contacto);
  $stm->bindParam(":Email",$Email);
  $stm->bindParam(":Contrasena",$Contrasena);
  $stm->execute();

  header("location:user.php");

}

?>


<?php include("../../template/headerUser.php")?>

    <form action="" method="post">
     
<div class="modal-body">

        <input type="int" class="form-control" name="txtid" disabled value="<?php echo $txtid; ?> ">
        <br>
        <input type="tex" class="form-control" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre; ?>">
        <br>
        <input type="tex" class="form-control" name="Apellido" placeholder="Apellido" value="<?php echo $Apellido; ?>">
        <br>
        <input type="tex" class="form-control" name="Direccion" placeholder="Direccion" value="<?php echo $Direccion; ?>">
        <br>
        <input type="tex" class="form-control" name="Contacto" placeholder="numero de contacto" value="<?php echo $Contacto; ?>">
        <br>
        <input type="tex" class="form-control" name="Email" placeholder="Email" value="<?php echo $Email; ?>">
        <br> 
        <input type="tex" class="form-control" name="Contrasena" placeholder="Contraseña" value="<?php echo $Contrasena; ?>">
      </div>
      <div class="modal-footer">
        <a href="user.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>


    <?php include("../../template/footerUser.php")?>
