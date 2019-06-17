<?php include 'header.php' ?>
<?php include 'nav-admin.php' ?>
<div class="container">

<h1>Añadir Plato</h1>
<form  class ='text-center' method='post' action='agregar-plato.php'>
  <div class="form-group">
    <label for="nombre_plato">Nombre del Plato</label>
    <input name='nombre_plato' type="text" class="form-control" id="nombre_plato"  required placeholder="Nombre del Plato">
  </div>
  <div class="form-group">
    <label for="precio_plato">Precio Plato</label>
    <input  name='precio_ud' type="text" class="form-control"  required value= 0.00 placeholder='€'id="precio_plato" placeholder="poner precio">
	<small>Poner precio sin palabra euros y con decimales con punto</small>
  </div>
 
 <fieldset class="border border-secondary p-2 " > 
  <legend>Elige que orden tendrán en el menú</legend>
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" required name="orden_plato" id="primero" value="primero">
  <label class="form-check-label" for="primero">Primero</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="orden_plato" id="segundo" value="segundo">
  <label class="form-check-label" for="segundo">segundo</label>
</div>
<div class="form-check form-check-inline">
  <input required class="form-check-input" type="radio" name="orden_plato" id="postre" value="postre">
  <label class="form-check-label" for="postre">postre</label>
</div>
</fieldset>
<div class="form-check mt-2">
  <input class="form-check-input" type="checkbox"  id="menu_activo" value=1 checked name='menu_activo'>
  <label class="form-check-label" for="menu_activo">
    Activar dentro del menú
  </label>
</div>
<button type="submit" class=" mt-2 btn btn-primary mb-2">Agregar nuevo plato</button>
</form>


</div>

<?php include 'footer.php' ?>