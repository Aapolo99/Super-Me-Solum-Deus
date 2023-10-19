<?php
/* Conexión del archivo de funciones */
include_once('recibir.php');

/* Funcion que permite guardar la URL principal de mis archivos php o html */
if (!defined('ROOT')) {
    define("ROOT", 'http://'.$_SERVER['HTTP_HOST'].getFolderProject());
}

?>