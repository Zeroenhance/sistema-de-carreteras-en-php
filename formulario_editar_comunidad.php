<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Editar comunidad</title>
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
<li><a href="formulario_administrar_comunidades.php"><h3>Regresar</h3></a></li>          
</ul>
</nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->



<section class="contact" id="acceso">
<?php 
include 'comunidades.php';
$comunidades = new comunidades();
$id = $_GET['clave']; // importante saber a quíen vamos a modificar por eso se toma la clave
$comunidad = $comunidades->seleccionar_comunidad($id); // nos traemos los datos del usuario del Registro
foreach ($comunidad as $row)
{
$nombre = $row['Nombre'];
$entidad = $row['Entidad'] ;
}
?>	
<div class="container">
<div class="form-group">
<div class="col-lg-5 text-center">
<div class="form"> 
<h3>Editar comunidad</h3><br>
<form action="funcion_editar_comunidad.php" method="post" id="contactFrm" name="contactFrm">
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" class="form-control" data-rule="minlen:4" required placeholder="Nombre de la comunidad" value="<?php echo $nombre; ?>" name="nombre" class="txt"><br><br>
<div align="left">Seleccione Categoria:</div>
<select type="text" class="form-control" name="entidad" required>	 
	<option value="Aguascalientes"<?php if($entidad=="Aguascalientes") echo 'selected="selected"'; ?>>Aguascalientes</option>
	<option value="Baja California"<?php if($entidad=="Baja California") echo 'selected="selected"'; ?>>Baja California</option>
	<option value="Baja California Sur"<?php if($entidad=="Baja California Sur") echo 'selected="selected"'; ?>>Baja California Sur</option>
	<option value="Campeche"<?php if($entidad=="Campeche") echo 'selected="selected"'; ?>>Campeche</option>
	<option value="Chihuahua"<?php if($entidad=="Chihuahua") echo 'selected="selected"'; ?>>Chihuahua</option>
	<option value="Chiapas"<?php if($entidad=="Chiapas") echo 'selected="selected"'; ?>>Chiapas</option>
	<option value="Ciudad de México (antes D.F.)"
	<?php if($entidad=="Ciudad de México (antes D.F.)") echo 'selected="selected"'; ?>>Ciudad de México (antes D.F.)</option>
	<option value="Coahuila"<?php if($entidad=="Coahuila") echo 'selected="selected"'; ?>>Coahuila</option>
	<option value="Colima"<?php if($entidad=="Colima") echo 'selected="selected"'; ?>>Colima</option>
	<option value="Durango"<?php if($entidad=="Durango") echo 'selected="selected"'; ?>>Durango</option>
	<option value="Guanajuato"<?php if($entidad=="Guanajuato") echo 'selected="selected"'; ?>>Guanajuato</option>
	<option value="Guerrero"<?php if($entidad=="Guerrero") echo 'selected="selected"'; ?>>Guerrero</option>
	<option value="Hidalgo"<?php if($entidad=="Hidalgo") echo 'selected="selected"'; ?>>Hidalgo</option>
	<option value="Jalisco"<?php if($entidad=="Jalisco") echo 'selected="selected"'; ?>>Jalisco</option>
	<option value="México"<?php if($entidad=="México") echo 'selected="selected"'; ?>>México</option>
	<option value="Michoacán"<?php if($entidad=="Michoacán") echo 'selected="selected"'; ?>>Michoacán</option>
	<option value="Morelos"<?php if($entidad=="Morelos") echo 'selected="selected"'; ?>>Morelos</option>
	<option value="Nayarit"<?php if($entidad=="Nayarit") echo 'selected="selected"'; ?>>Nayarit</option>
	<option value="Nuevo León"<?php if($entidad=="Nuevo León") echo 'selected="selected"'; ?>>Nuevo León</option>
	<option value="Oaxaca"<?php if($entidad=="Oaxaca") echo 'selected="selected"'; ?>>Oaxaca</option>
	<option value="Puebla"<?php if($entidad=="Puebla") echo 'selected="selected"'; ?>>Puebla</option>
	<option value="Querétaro"<?php if($entidad=="Querétaro") echo 'selected="selected"'; ?>>Querétaro</option>
	<option value="Quintana Roo"<?php if($entidad=="Quintana Roo") echo 'selected="selected"'; ?>>Quintana Roo</option>
	<option value="San Luis Potosí"<?php if($entidad=="San Luis Potosí") echo 'selected="selected"'; ?>>San Luis Potosí</option>
	<option value="Sinaloa"<?php if($entidad=="Sinaloa") echo 'selected="selected"'; ?>>Sinaloa</option>
	<option value="Sonora"<?php if($entidad=="Sonora") echo 'selected="selected"'; ?>>Sonora</option>
	<option value="Tabasco"<?php if($entidad=="Tabasco") echo 'selected="selected"'; ?>>Tabasco</option>
	<option value="Tamaulipas"<?php if($entidad=="Tamaulipas") echo 'selected="selected"'; ?>>Tamaulipas</option>
	<option value="Tlaxcala"<?php if($entidad=="Tlaxcala") echo 'selected="selected"'; ?>>Tlaxcala</option>
	<option value="Veracruz"<?php if($entidad=="Veracruz") echo 'selected="selected"'; ?>>Veracruz</option>
	<option value="Yucatán"<?php if($entidad=="Yucatán") echo 'selected="selected"'; ?>>Yucatán</option>
	<option value="Zacatecas"<?php if($entidad=="Zacatecas") echo 'selected="selected"'; ?>>Zacatecas</option>
</select><br><br>
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