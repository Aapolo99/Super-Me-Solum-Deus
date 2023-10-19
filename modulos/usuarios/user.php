<?php 
include '../../config.php';
include("conexion.php");

/*$stm=$conex->prepare("SELECT * FROM usuarios");*/
$stm=$conex->prepare("SELECT U.id_usuario, U.Nombre, U.Apellido, U.Direccion, U.Contacto, U.Email, U.Contrasena, R.rol FROM usuarios AS U
    LEFT JOIN roles AS R ON U.ID_Rol = R.ID");
$stm->execute();
$usuarios=$stm->fetchAll(PDO::FETCH_ASSOC);

/* Eliminar Registro  */
if(isset($_GET['id_usuario'])){

    $txtid=(isset($_GET['id_usuario'])?$_GET['id_usuario']:"");
    $stm=$conex->prepare("DELETE FROM usuarios WHERE id_usuario=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();

    echo'<script type="text/javascript">
    alert("Usuario Eliminado Exitosamente");
    window.location.href="user.php";
    </script>';
    /*
    header("location:user.php");
    */
}

?>

<?php include("../../template/headerUser.php")?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
Agregar
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Contacto</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
            <tr class="">
                <td scope="row"><?php echo $usuario['id_usuario']; ?></td>
                <td><?php echo $usuario['Nombre']; ?></td>
                <td><?php echo $usuario['Apellido']; ?></td>
                <td><?php echo $usuario['Direccion']; ?></td>
                <td><?php echo $usuario['Contacto']; ?></td>
                <td><?php echo $usuario['Email']; ?></td>
                <td><?php echo $usuario['Contrasena']; ?></td>
                <td><?php echo $usuario['rol']; ?></td>
                <td>
                <a href="edit.php?id_usuario=<?php echo $usuario['id_usuario'];?>" class="btn btn-success">Editar</a>
                <a href="user.php?id_usuario=<?php echo $usuario['id_usuario'];?>" class="btn btn-danger">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include("create.php"); ?>
<?php include("../../template/footerUser.php")?>