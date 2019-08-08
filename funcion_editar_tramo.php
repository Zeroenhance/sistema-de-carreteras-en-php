<?php

	//código que llama a la función de editar_comunidad de la clase comunidades 
    require_once 'tramos.php';
    $tramos = new tramos();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $idcarretera = $_POST['idcarretera'];
    $inicio = $_POST['inicio'];        
    $fin = $_POST['fin'];        
    $tramos->editar_tramo($id, $nombre, $inicio, $fin, $idcarretera);
    header("Location: formulario_administrar_tramos.php");
?>