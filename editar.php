<?php
if(!isset($_GET["id_producto"])) exit();
$id_producto = $_GET["id_producto"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id_producto = ?;");
$sentencia->execute([$id_producto]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id_producto; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id_producto" value="<?php echo $producto->id_producto; ?>">
	
			<label for="nombre">Nombre del Producto:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

			<label for="precio">Precio de venta:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de venta">

			<label for="stock">stock:</label>
			<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o stock">

			<label for="descripcion">Descripción:</label>
			<input value="<?php echo $producto->descripcion ?>" class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="descripcion">

			<label for="cantidadd">Cantidad:</label>
			<input value="<?php echo $producto->cantidadd ?>" class="form-control" name="cantidadd" required type="number" id="cantidad" placeholder="cantidad de compra">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">
			
			<label for="id_proveedor">Id del proveedor:</label>
			<input value="<?php echo $producto->id_proveedor ?>" class="form-control" name="id_proveedor" required type="number" id="id_proveedor" placeholder="id_proveedor">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
