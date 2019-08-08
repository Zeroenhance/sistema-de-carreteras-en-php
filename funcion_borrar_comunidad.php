<?php
	//código que llama a la función de borrar_comunidad de la clase comunidades
	require_once 'comunidades.php';
	$comunidades = new comunidades();
	$id = $_GET['id'];
	$comunidades->borrar_comunidad($id);
	header("Location: formulario_administrar_comunidades.php");
?>