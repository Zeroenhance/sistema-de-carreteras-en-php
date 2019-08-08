<?php
//Código que llama a la funcione verificar_existente de la clase tramos
require_once 'tramos.php';
$tramos = new tramos();
$nombre = $_POST['nombre'];
$idcarretera = $_POST['idcarretera'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$resultado = $tramos->verficar_existente($id, $nombre);
if ($resultado==1)
{       
    header("Location: error_tramo_existente.html");
}
else
{				
	//En caso de que no exista procede a llamar a la funcion agregar_tramo de la clase tramos
    $tramos->agregar_tramo($nombre, $inicio, $fin, $idcarretera);
    header("Location: exito_tramo_registrado.html");
}		
?>