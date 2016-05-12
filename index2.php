<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Serivicios Editoriales -ITH-</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">


<style type="text/css">
body {
	background-color: ##F2F2F2;
  background-image: url(fondo.jpg);


	
}
body,td,th {
	color: #FFF;
}

</style>
</head>

<body>

<header class="header">
  <img src="header-ith.png">

<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Usuarios</h4>
					<a href="al.php"><small>Usuarios</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Servicios Copiado Servicios </h4>
					<a href="te.php"><small>Servicios Copiado</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Departamentos</h4>
					<a href="fi.php"><small>Departamentos</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Reportes</h4>
					<a href="fp.php"><small>Reportes</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Estimaciones</h4>
					<a href="fm.php"><small>Estimaciones cronologicos</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Solicitud materia prima</h4>
					<a href="fm.php"><small>Solicitud materia prima</small></a>
				</div>
			</div>
	
			
		
			
			
</div>
<!-- Footer
      ================================================== -->
<footer >
Copyright Joseph Godoy, Gerardo Gutierrez y Luis Granda 
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>