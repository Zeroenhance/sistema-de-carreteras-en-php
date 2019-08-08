<?php
//Código que llama a la funcione verificar_existente de la clase tramos
require_once 'tramos_comunidades.php';
$tramos_comunidades = new tramos_comunidades();
$idtramo = $_POST['idtramo'];
$idcomunidad = $_POST['idcomunidad'];
foreach ($idcomunidad as $idc)
	{
		$resultado = $tramos_comunidades->verficar_existente($idtramo, $idc);
	}
if ($resultado==1)
{       
    header("Location: error_relacion_existente.html");
}
else
{				
	//En caso de que no exista procede a llamar a la funcion agregar_tramo de la clase tramos
	$tramos_comunidades->agregar_tramo_comunidades($idtramo, $idcomunidad);
    header("Location: exito_relacion_registrada.html");
}	

?>