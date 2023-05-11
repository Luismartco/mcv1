<?php

require('Model/Conexion.php');

$con = new Conexion();

$usuario = $con->getUser();

require ('views/verUser.php');
?>