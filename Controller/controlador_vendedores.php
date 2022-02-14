<?php
    require('Model/conexion.php');

    $con = new Conexion();

    $vendedores = $con->getVendedores();

    require('Views/vista_vendedores.php');
?>


