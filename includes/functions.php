<?php
// funcion para listar consultas con ul html
//al invocarla debemos pasar como parámetro una variable que recoja la consulta sql
function consulta_lista($con){
	echo '<ul  class="list-unstyled">';
	while ($fila = mysqli_fetch_array($con)) {
	
	echo "<li>". $fila['nombre_plato'] ."</li>";
    }
	echo '</ul>';
	
}


?>