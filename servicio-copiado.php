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
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->


		<h2 style="color: #605C5C">Servicio de Copiado</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4 style="color: #837E7E"; align="center">Nuevo Servicio</h4>
		<div class="row-fluid">
		
		<?php
			require("connect_db.php");
			$sql=("SELECT * FROM servicop");
			$query=mysql_query($sql);
			mysql_select_db("mydb",$servicop);
   $sql = "INSERT INTO agenda (departamento, maestro, copias, clave) ".
     "VALUES ('$departamento', '$maestro', '$copias', '$clave')";
   $result = mysql_query($sql);


?>
		<form action="ejecutaactualizar.php" method="post">
		<p align="center">
			<b style="color: #837E7E">Departamento</b><br>
			<select style="border-radius:15px;" type="text" name="depart" required>
			   <option value="sistemas">Sistemas e Informatica</option>
			   <option value="ciencias">Electrica-Electronica</option>
			   <option value="electronica">Metal-Mecanica</option>
			   <option value="admin" selected>Econ-Admin</option>
</select><br>
			<b style="color: #837E7E">Maestro</b><br> 
			<select style="border-radius:15px;" type="text" name="maestro" required>
			   <option value="sistemas">Emilio Barajas</option>
			   <option value="ciencias">Guilda Grizzel Hernandez</option>
			   <option value="electronica">Patricia Sevilla</option>
			   <option value="admin" selected>Jorge David Gutierrez</option>
</select><br>
			<b style="color: #837E7E">Numero de Copias</b><br> <input style="border-radius:15px;" type="text" name="copys" required><br>
</select><br>
			<b style="color: #837E7E">Clave</b><br> <select style="border-radius:15px;" type="text" name="depart" required>
			   <option value="Examenes">001 Examenes</option>
			   <option value="Recursos">002 Recursos</option>
			   <option value="Evento departamental">ESP001 evento esp.</option>
			   <option value="Evento Administrativo" selected>ESP002 evento adm.</option>
</select><br>
		</p>
				<input class="btn btn-primary" value="Guardar">
			</form>
<div class="span8">

		</div>	
		</div>	
		<br/>

		
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>