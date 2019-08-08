<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Administrar comunidades</title>
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
<?php
require_once 'comunidades.php';
$comunidades = new comunidades();
$tablaComunidades = $comunidades->listar_comunidades(); 
?> 

<!-- Header -->
<header id="header">
<div class="container">


<nav id="nav-menu-container">
<ul class="nav-menu">                
<li><a href="index.php"><h3>Menú Principal</h3></a></li>          
<li><a href="formulario_alta_comunidad.php"><h3>Ingresar nueva comunidad</h3></a></li>
</ul>
</nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->



<section class="contact" id="acceso">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1>Lista de Comunidades</h1>
<center>
<table class="table">
<tr>
<th>Nombre</th>            
<th>Tipo</th>
<th>Editar</th>
<th>Borrar</th>
</tr>
<?php
foreach ($tablaComunidades as $row) {
echo '<tr>';
echo '<td>' . $row['Nombre'] . '</td>';// debemos poner nombre de los campos de la BD            
echo '<td>' . $row['Entidad'] . '</td>';
echo '<td>
<a href="formulario_editar_comunidad.php?clave='. $row['idComunidad'] .'"><img src="img/edit.png" width="50" 
style="cursor:pointer"/></a></td>';  //concatenamos en la cadena de la dirección de archivo la clave de       
//usuario
echo '<td>
<a href="javascript:seguro(\'funcion_borrar_comunidad.php?id='.$row['idComunidad'].'\', \''. $row['Nombre'] .'\');">
<img src="img/botebasura.png" width="50"
style="cursor:pointer" />
</a>
</td>';
echo '</tr>';
}
?>
</table>
</center>
<script>
function seguro(link, nombre)
{
	swal(
	{
		title: "¿Estás seguro que quieres borrar a " + nombre + " ?",
		text: "¡Ésta acción no se podrá deshacer!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Borrar",
		cancelButtonText: "Cancelar",
		closeOnConfirm: false		
	},
	function(isConfirm)
	{
		if (isConfirm) 
		{
		window.location.href = link;
		
		} 
	}
	);
}
</script>   
</div>    
</div>
</div>
</section>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> 
<script src="js/custom.js"></script>

<script src="contactform/contactform.js"></script>

</body>
</html>