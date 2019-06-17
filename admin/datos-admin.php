<?php
include '../includes/conexiondb.php';
//preparamos los ordenes 
$sql= "SELECT * FROM platos ORDER BY orden_plato ";

// ejecutamos las consultas
$consulta = mysqli_query($conex, $sql);

?>