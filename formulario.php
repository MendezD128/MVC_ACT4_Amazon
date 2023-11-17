<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="nombre">Nombre de barras:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

		<label for="precio">Precio de venta:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de venta">
		
		<label for="stock">stock:</label>
		<input class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o stock">

		<label for="descripcion">Descripción:</label>
		<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="descripcion ">

		<label for="cantidadd">Cantidad:</label>
		<input class="form-control" name="cantidadd" required type="number" id="cantidadd" placeholder="Cantidad ">

		<label for="categoria">Categoria:</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

		<label for="id_proveedor">Id del proveedor:</label>
		<input class="form-control" name="id_proveedor" required type="number" id="id_proveedor" placeholder="Id del proveedor">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>