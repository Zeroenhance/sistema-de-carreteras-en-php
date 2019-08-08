<?php
	//código que llama a la función de borrar_tramo de la clase tramos
	require_once 'tramos.php';
	$tramos = new tramos();
	$id = $_GET['id'];
	$tramos->borrar_tramo($id);
	header("Location: formulario_administrar_tramos.php");
?>