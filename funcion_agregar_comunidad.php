<?php
//Código que llama a la funcione verificar_existente de la clase comunidades
require_once 'comunidades.php';
$comunidades = new comunidades();
$nombre = $_POST['nombre'];   
$entidad = $_POST['entidad'];
$resultado = $comunidades->verficar_existente($nombre, $entidad);
if ($resultado==1)
{       
    header("Location: error_comunidad_existente.html");
}
else
{
	//En caso de que no exista procede a llamar a la funcion agregar_comunidad de la clase comunidad
    $comunidades->agregar_comunidad($nombre, $entidad);
    header("Location: exito_comunidad_registrada.html");
}		
?>