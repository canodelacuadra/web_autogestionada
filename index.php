
<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Pizarra bar</title>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
</head>

<body>
<?php 
include 'includes/datos.php';
include 'includes/functions.php';
?>
<div class="container">

<h1>Restaurante el Tomillo</h1>

<div class="" id="pizarra">
	<h2>Menú del día</h2>
	<h3>Primeros</h3>
	
	<?php 
	consulta_lista($consulta1);
	?>
	<h3>Segundos</h3>
	<?php 
	consulta_lista($consulta2);
	?>
	<h3>Postres</h3>
	<?php 
	consulta_lista($consulta3);
	?>
	<h3>Incluye</h3>
	Pan, vino o agua, café. 
	
	<h3> Precio: 20.00€</h3>
</div>
<address>
Avenida de Reyes Católicos 80, <br>02600 Villarrobledo <br>, España
</address>


</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>