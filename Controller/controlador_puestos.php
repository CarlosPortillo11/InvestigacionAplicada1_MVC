<?php
    require('Model/conexion.php');

    $con = new Conexion();

    $puestos = $con->getPuestos();

    require('Views/vista_puestos.php');
?>