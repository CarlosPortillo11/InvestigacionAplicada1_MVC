<?php
    require('Model/conexion.php');

    $con = new Conexion();

    $productos = $con->getProductos();

    require('Views/vista_productos.php');
?>