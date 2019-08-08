<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registrar comunidad</title>
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
<li><a href="index.php"><h3>Menú principal</h3></a></li>          
<li><a href="formulario_administrar_comunidades.php"><h3>Lista de comunidades</h3></a></li>
</ul>
</nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->



<section class="contact" id="acceso">
<div class="container">
<div class="form-group">
<div class="col-lg-5 text-center">
<div class="form"> 
<h3>Registrar comunidad</h3><br>
<form action="funcion_agregar_comunidad.php" method="post" id="contactFrm" name="contactFrm">
<input type="text" class="form-control" data-rule="minlen:4" required placeholder="Nombre de la comunidad" value="" name="nombre" class="txt"><br><br>
<div align="left">Seleccione Entidad Federativa:</div>
<select type="text" class="form-control" name="entidad" required>	 
		<option value="Aguascalientes">Aguascalientes</option>
		<option value="Baja California">Baja California</option>
		<option value="Baja California Sur">Baja California Sur</option>
		<option value="Campeche">Campeche</option>
		<option value="Chihuahua">Chihuahua</option>
		<option value="Chiapas">Chiapas</option>
		<option value="Ciudad de México (antes D.F.)">Ciudad de México (antes D.F.)</option>
		<option value="Coahuila">Coahuila</option>
		<option value="Colima">Colima</option>
		<option value="Durango">Durango</option>
		<option value="Guanajuato">Guanajuato</option>
		<option value="Guerrero">Guerrero</option>
		<option value="Hidalgo">Hidalgo</option>
		<option value="Jalisco">Jalisco</option>
		<option value="México">México</option>
		<option value="Michoacán">Michoacán</option>
		<option value="Morelos">Morelos</option>
		<option value="Nayarit">Nayarit</option>
		<option value="Nuevo León">Nuevo León</option>
		<option value="Oaxaca">Oaxaca</option>
		<option value="Puebla">Puebla</option>
		<option value="Querétaro">Querétaro</option>
		<option value="Quintana Roo">Quintana Roo</option>
		<option value="San Luis Potosí">San Luis Potosí</option>
		<option value="Sinaloa">Sinaloa</option>
		<option value="Sonora">Sonora</option>
		<option value="Tabasco">Tabasco</option>
		<option value="Tamaulipas">Tamaulipas</option>
		<option value="Tlaxcala">Tlaxcala</option>
		<option value="Veracruz">Veracruz</option>
		<option value="Yucatán">Yucatán</option>
		<option value="Zacatecas">Zacatecas</option>
	</select><br><br>
<input type="submit" value="Agregar comunidad" name="submit" class="txt2">
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