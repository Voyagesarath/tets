<!DOCTYPE html>
		<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Editorial ITH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <style type="text/css">
body {
	background-color: ##F2F2F2;
	
}
body,td,th {
	color: #FFF;
}

</style>
<header>
  <img src="header-ith.png">

</header>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <!--<td width="96%" align="center"><img src="editorial.png" width="820" height="100" /></td>-->
    <td>&nbsp;</td>
  </tr>
<div class="container">
<header class="header">
<div class="row">
	</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="principal.php">Principal</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!-- ======================================================================================================================== -->

<?php
include_once("conexion.php");
 
$con = new DB;
$user = $con->conectar();
$strConsulta = "SELECT id_user, nombre, apaterno, amaterno, departamento, coordinador from user";
$user = mysql_query($strServicop);
$numfilas = mysql_num_rows($user);
 
echo '<table cellpadding="0" cellspacing="0" width="100%">';
echo '<thead><tr><td>No.</td><td>CLAVE</td><td>NOMBRE</td><td>HISTORIAL</td></tr></thead>';
for ($i=0; $i<$numfilas; $i++)
{
$fila = mysql_fetch_array($user);
$numlista = $i + 1;
echo '<tr><td>'.$numlista.'</td>';
echo '<td>'.$fila['nombre'].'</td>';
echo '<td>'.$fila['apaterno'].' '.$fila['amaterno'].' '.$fila['departamento'].' '.$fila['coordinador'].'</td>';
echo '<td><a href="reporte_historial.php?id='.$fila['user'].'">ver</a></td></tr>';
}
echo "</table>";
?>		
