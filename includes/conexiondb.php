<?php 
// función para conectarnos con la base de datos
$host='localhost';
$usuario='root';
$clave = '';
$base ='web_autogestionada';
//
$conex = mysqli_connect($host,$usuario,$clave, $base) or die('No se ha podido conectar con la base de datos');

// ponemos datos utf-8
mysqli_set_charset($conex,"utf8");


 ?>