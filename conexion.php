<?php

$servidor ="localhost";
$dbname ="supermesolumdeus";
$username ="root";
$password ="";

try {
    $conex=new PDO("mysql:host=$servidor;dbname=$dbname",$username,$password);
    /*echo "Connection established";*/
} catch (Exception $e) {
    echo $e->getMessage();
}

$URL = "http://localhost/xampp/Super-Me-Solum-Deus";

?>