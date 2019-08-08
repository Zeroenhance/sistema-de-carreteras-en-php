<?php
//Código que llama a la funcione verificar_existente de la clase carreteras
require_once 'carreteras.php';
$carreteras = new carreteras();
$nombre = $_POST['nombre'];   
$categoria = $_POST['categoria'];
$resultado = $carreteras->verficar_existente($nombre, $categoria);
if ($resultado==1)
{       
    header("Location: error_carretera_existente.html");
}
else
{	
	//En caso de que no exista procede a llamar a la funcion agregar_carretera de la clase carreteras
    $carreteras->agregar_carretera($nombre, $categoria);
    header("Location: exito_carretera_registrada.html");
}		
?>