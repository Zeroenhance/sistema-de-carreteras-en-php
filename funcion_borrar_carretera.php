<?php
	//código que llama a la función de borrar_carretera de la clase carreteras
	require_once 'carreteras.php';
	$carreteras = new carreteras();
	$id = $_GET['id'];
	$carreteras->borrar_carretera($id);
	header("Location: formulario_administrar_carreteras.php");
?>