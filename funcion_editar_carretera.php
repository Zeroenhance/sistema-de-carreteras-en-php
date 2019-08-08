<?php
	//código que llama a la función de editar_carretera de la clase carreteras
    require_once 'carreteras.php';
    $carreteras = new carreteras();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];        
    $carreteras->editar_carretera($id, $nombre, $categoria);
    header("Location: formulario_administrar_carreteras.php");
?>1