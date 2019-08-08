<?php

	//código que llama a la función de editar_comunidad de la clase comunidades 
    require_once 'comunidades.php';
    $comunidades = new comunidades();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $entidad = $_POST['entidad'];        
    $comunidades->editar_comunidad($id, $nombre, $entidad);
    header("Location: formulario_administrar_comunidades.php");
?>