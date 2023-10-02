<?php
    include("conexion.php");
if(isset($_POST['registrar'])){
    if(
        strlen($_POST ['id_usuario']) >= 1 &&
        strlen($_POST ['Nombre']) >= 1 &&
        strlen($_POST ['Apellido']) >= 1 &&
        strlen($_POST ['Direccion']) >= 1 &&
        strlen($_POST ['Contacto']) >= 1 &&
        strlen($_POST ['Email']) >= 1 &&
        strlen($_POST ['Contrasena']) >= 1
      ) {

            $id_usuario=trim($_POST['id_usuario']);
            $Nombre=trim($_POST['Nombre']);
            $Apellido=trim($_POST['Apellido']);
            $Direccion=trim($_POST['Direccion']);
            $Contacto=trim($_POST['Contacto']);
            $Email=trim($_POST['Email']);
            $Contrasena=trim($_POST['Contrasena']);
            $consulta="INSERT INTO usuarios (id_usuario,Nombre,Apellido,Direccion,Contacto,Email,Contrasena)
                values ('$id_usuario','$Nombre','$Apellido','$Direccion','$Contacto','$Email','$Contrasena')";
            $resultado= mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                <h3 class="success">Tu registro se ha completado</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Llena todos los campos</h3>
                <?php
            }
    }else{

    }

}

?>