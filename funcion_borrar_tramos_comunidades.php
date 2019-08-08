<?php

	//código que llama a la función de editar_comunidad de la clase comunidades 
    require_once 'tramos_comunidades.php';
    $tramos_comunidades = new tramos_comunidades();
    $idtramo = $_GET['idtramo'];    
    $idcomunidad = $_GET['idcomunidad'];    
    $tramos_comunidades->borrar_tramo_comunidad($idtramo, $idcomunidad);
    header("Location: formulario_administrar_tramos_comunidades.php");
?>