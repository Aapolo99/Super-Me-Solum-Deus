<?php
    include("./conexion.php");
if(isset($_POST['registrar'])){
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
                window.location.href="formreg.php";
                </script>';
                }
        }else {
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
        window.location.href="index1.php";
        </script>';
        }
}

?>