<?php 
include '../../config.php';
include("../../conexion.php");



$stm=$conex->prepare("SELECT * FROM listasprecios");
$stm->execute();
$listas=$stm->fetchAll(PDO::FETCH_ASSOC);

/* Eliminar Registro  */
if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conex->prepare("DELETE FROM listasprecios WHERE id=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();

    echo'<script type="text/javascript">
    alert("lista Eliminada Exitosamente");
    window.location.href="lista.php";
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
                <th scope="col">#</th>
                <th scope="col">Nombre Lista</th>
                <th scope="col">Plato</th>
                <th scope="col">Precio</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($listas as $lista) { ?>
            <tr class="">
                <td scope="row"><?php echo $lista['id']; ?></td>
                <td><?php echo $lista['nombre_lista']; ?></td>
                <td><?php echo $lista['plato']; ?></td>
                <td><?php echo $lista['precio']; ?></td>
                <td>
                <a href="editLista.php?id=<?php echo $lista['id'];?>" class="btn btn-success">Editar</a>
                <a href="lista.php?id=<?php echo $lista['id'];?>" class="btn btn-danger">Eliminar</a>
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include("../../modulos/listaPrecios/createLista.php"); ?>



<?php include("../../template/footerUser.php")?>