<?php 
include '../../config.php';
include("../../conexion.php");

$stm=$conex->prepare("SELECT * FROM reservas");
$stm->execute();
$reservas=$stm->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include("../../template/headerUser.php")?>
<h1>Reservaciones</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
Reservar
</button>
<p>
<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Reserva</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Mesa</th>
                <th scope="col">fecha</th>
                <th scope="col">#comensales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservas as $reserva) { ?>
            <tr class="">
                <td scope="row"><?php echo $reserva['id_reserva']; ?></td>
                <td><?php echo $reserva['id_usuario']; ?></td>
                <td><?php echo $reserva['NombreApellido']; ?></td>
                <td><?php echo $reserva['id_mesa']; ?></td>
                <td><?php echo $reserva['fecha_hora']; ?></td>
                <td><?php echo $reserva['Personas']; ?></td>
            
                
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include("procesar_reserva.php"); ?>



<?php include("../../template/footerUser.php")?>