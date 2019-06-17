<?php include 'header.php';?>
<?php include 'nav-admin.php';?>
<?php 
if(isset($_GET['id'])){
$id= $_GET['id'];
//echo $id;
include "../includes/conexiondb.php";
$sql="DELETE FROM platos WHERE id='$id' ";
if(mysqli_query($conex,$sql)){
	echo "El registro con ID=$id ha sido borrado";
	}else{
	echo "El registro con ID=$id no ha podido ser borrado";
	}
}
 ?>
 <?php include 'footer.php';?>