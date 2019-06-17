<?php include 'header.php' ?>
<?php include 'nav-admin.php' ?>
<div class="container" id="">
<?php 
//recogemos los datos validandolos con isset
if( isset($_POST['nombre_plato'],$_POST['precio_ud'],$_POST['orden_plato'],$_POST['menu_activo'])){
	//los datos datos recogidos los asociamos a una variable de manejo
$nombre_plato = $_POST['nombre_plato'];
$precio_ud = $_POST['precio_ud'];
$orden_plato= $_POST['orden_plato'];
$menu_activo = $_POST['menu_activo'];
// abrimos conexion y ejecutamos la consulta 
include '../includes/conexiondb.php';
// preparamos la orden sql
$sql = "INSERT INTO platos (id, nombre_plato,precio_ud, orden_plato,menu_activo) VALUES ('0','$nombre_plato','$precio_ud','$orden_plato','$menu_activo')";
//ejutamos la consulta 

if(mysqli_query($conex, $sql)){
echo 'Plato agregado. Volver al <a class="btn btn-success" href="admin-platos.php">Listado</a>';	
}else{
	'Plato no agregado. Volver al <a class="btn btn-success" href="admin-platos.php">formulario</a>';
}






}else{
	echo 'rellene bien el <a class="btn btn-success" href="admin-platos.php">formulario</a>';
}

 ?></div>
 <?php include 'footer.php' ?>