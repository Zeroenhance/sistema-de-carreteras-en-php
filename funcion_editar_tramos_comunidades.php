<?php

	//código que llama a la función de editar_comunidad de la clase comunidades 
    require_once 'tramos_comunidades.php';
    $tramos_comunidades = new tramos_comunidades();
    $idtramo = $_POST['idtramo'];
    $idcomunidadprevia = $_POST['idcomunidadprevia'];
    $idcomunidad = $_POST['idcomunidad'];
    /*echo 'tramo:'.$idTramo.'<br>' ;
    echo 'comunidad anterior:'.$idComunidadprevia.'<br>' ;
    echo 'Comunidad nueva:'.$idComunidadnueva.'<br>' ;*/
    $resultado = $tramos_comunidades->verficar_existente($idtramo, $idcomunidad);
    if ($resultado==1)
    {       
       header("Location: error_relacion_existente.html");
    }
    else
    {
        $tramos_comunidades-> borrar_tramo_comunidad($idtramo, $idcomunidadprevia);        
        $tramos_comunidades-> agregar_tramo_comunidad($idtramo, $idcomunidad);
        header("Location: formulario_administrar_tramos_comunidades.php");
    }
?>