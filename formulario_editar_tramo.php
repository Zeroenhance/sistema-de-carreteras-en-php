<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Editar tramo</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style-p.css" rel="stylesheet">
<link href="lib/bootstrap/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/tether/js/tether.min.js"></script>
<script src="lib/stellar/stellar.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/easing/easing.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/parallax/parallax.js"></script>
<script src="lib/lockfixed/lockfixed.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
<!-- Header -->
<header id="header">
<div class="container">


<nav id="nav-menu-container">
<ul class="nav-menu">                
<li><a href="index.php"><h3>Menú Principal</h3></a></li>
<li><a href="formulario_administrar_tramos.php"><h3>Lista de tramos</h3></a></li>
</ul>
</nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->



<section class="contact" id="acceso">
<?php 
include 'tramos.php';
include 'carreteras.php';
$carreteras = new carreteras();
$tramos = new tramos();
$ListaCarreteras = $carreteras->listar_carreteras_tramo(); // nos traemos los datos del usuario del Registro
$id = $_GET['clave']; // importante saber a quíen vamos a modificar por eso se toma la clave
$tramo = $tramos->seleccionar_tramo($id);
foreach ($tramo as $row)
{
$nombre = $row['Nombre'];
$inicio = $row['Inicio'];
$fin = $row['Fin'];
}
?>	
<div class="container">
<div class="form-group">
<div class="col-lg-5 text-center">
<div class="form"> 
<h3>Editar tramo</h3><br>
<form action="funcion_editar_tramo.php" method="post" id="contactFrm" name="contactFrm">
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" class="form-control" data-rule="minlen:4" required placeholder="Nombre del tramo" value="<?php echo $nombre; ?>" name="nombre" class="txt"><br><br>
<div align="left">Seleccione carretera a la que pertenece:</div>
<select type="text" class="form-control" name="idcarretera" required>
	<?php
		foreach ($ListaCarreteras as $row) 
		{			
			echo '<option value="'.$row['idCarretera'].'">'.$row['Nombre'].'</option>';
		}
	?>	
</select><br><br>
<div align="left">Kilometro de inicio:</div>
<input type="text" class="form-control" data-rule="maxlen:4" required value="<?php echo $inicio; ?>" name="inicio" class="txt"><br><br>
<div align="left">Kilometro de fin:</div>
<input type="text" class="form-control" data-rule="maxlen:4" required value="<?php echo $fin; ?>" name="fin" class="txt"><br><br>
<input type="submit" value="Guardar cambios" name="submit" class="txt2">
</form>
</div>
</div>
</div>
</div>    
</section>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> 
<script src="js/custom.js"></script>

<script src="contactform/contactform.js"></script>

</body>
</html>