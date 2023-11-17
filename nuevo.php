<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) 
||!isset($_POST["precio"]) || !isset($_POST["stock"]) 
||!isset($_POST["descripcion"]) || !isset($_POST["cantidadd"]) 
|| !isset($_POST["categoria"]) || !isset($_POST["id_proveedor"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];
$descripcion = $_POST["descripcion"];
$cantidadd = $_POST["cantidadd"];
$categoria = $_POST["categoria"];
$id_proveedor = $_POST["id_proveedor"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(nombre, precio, stock, descripcion, cantidadd, categoria, id_proveedor) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $precio, $stock, $descripcion, $cantidadd, $categoria, $id_proveedor]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>