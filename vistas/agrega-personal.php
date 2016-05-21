<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Oficina Editorial - ITH -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    
  </head>
  <style type="text/css">
body {
	background-color: ##F2F2F2;
	
}
body,td,th {
	color: #00000;
}

</style>
<header>
  <img src="../images/header-ith.png">

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
			  <li><a href="../php/desconectar.php"> Cerrar Cesión </a></li>			 
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
		<h2> Administración de usuarios nuevos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Agrega usuarios nuevos</h4>
		<div class="row-fluid">
		


		<form action="../php/agrega-nueva-persona.php" method="post">
		        
		        </div>
		        <br>
		        <div align="center">
				    No Control<br> <input type="text" id="id" name="id" required=""><br>
				    Nombre<br> <input type="text" id="nombre" name="nombre"  required=""><br>
				    Departamento<br> 
				    <select id=Departamento name="Nom_Departamento" required>
				    	<option value="BIOMEDICA">BIOMEDICA</option>
				    	<option value="CENTRO DE COMPUTO ADTIVO">CENTRO DE COMPUTO ADTIVO</option>
				    	<option value="CENTRO DE INFORMACION">CENTRO DE INFORMACION</option>
				    	<option value="CIENCIAS BASICAS">CIENCIAS BASICAS</option>
				    	<option value="COMUNICACIÓN Y DIFUSION">COMUNICACIÓN Y DIFUSION</option>
				    	<option value="DESARROLLO ACADEMICO">DESARROLLO ACADEMICO</option>
				    	<option value="DIRECCION">DIRECCION</option>
				    	<option value="DIVISION DE ESTUDIOS PROFESIONALES">DIVISION DE ESTUDIOS PROFESIONALES</option>
				    	<option value="ECONOMICO ADMINISTRATIVO">ECONOMICO ADMINISTRATIVO</option>
				    	<option value="ELECTRICA - ELECTRONICA">ELECTRICA - ELECTRONICA</option>
				    	<option value="EXTRAESCOLARES">EXTRAESCOLARES</option>
				    	<option value="GESTION TECNOLOGICA Y VINCULACION">GESTION TECNOLOGICA Y VINCULACION</option>
				    	<option value="IDIOMAS">IDIOMAS</option>
				    	<option value="INDUSTRIAL">INDUSTRIAL</option>
				    	<option value="MANTENIMIENTO Y EQUIPO">MANTENIMIENTO Y EQUIPO</option>
				    	<option value="METAL-MECANICA">METAL-MECANICA</option>
				    	<option value="PLANEACION, PROG. E INFRAES.">PLANEACION, PROG. E INFRAES.</option>
				    	<option value="POSGRADO">POSGRADO</option>
				    	<option value="RECURSOS FINANCIEROS">RECURSOS FINANCIEROS</option>
				    	<option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
				    	<option value="RECURSOS MATERIALES Y SERVICIOS">RECURSOS MATERIALES Y SERVICIOS</option>
				    	<option value="SERVICIOS ESCOLARES">SERVICIOS ESCOLARES</option>
				    	<option value="SISTEMAS Y COMPUTACION">SISTEMAS Y COMPUTACION</option>
				    	<option value="SUBDIRECCION ACADEMICA">SUBDIRECCION ACADEMICA</option>
				    </select><br>
				    Correo Electronico<br> <input type="email" id="email" name="email"><br>
				    Confirma el Departamento<br>
				<select id=idDepartamento name="ID_Departamento"  required>
				    	<option value="1">BIOMEDICA</option>
				    	<option value="2">CENTRO DE COMPUTO ADTIVO</option>
				    	<option value="3">CENTRO DE INFORMACION</option>
				    	<option value="4">CIENCIAS BASICAS</option>
				    	<option value="5">COMUNICACIÓN Y DIFUSION</option>
				    	<option value="6">DESARROLLO ACADEMICO</option>
				    	<option value="7">DIRECCION</option>
				    	<option value="8">DIVISION DE ESTUDIOS PROFESIONALES</option>
				    	<option value="9">ECONOMICO ADMINISTRATIVO</option>
				    	<option value="10">ELECTRICA - ELECTRONICA</option>
				    	<option value="11">EXTRAESCOLARES</option>
				    	<option value="12">GESTION TECNOLOGICA Y VINCULACION</option>
				    	<option value="13">IDIOMAS</option>
				    	<option value="14">INDUSTRIAL</option>
				    	<option value="15">MANTENIMIENTO Y EQUIPO</option>
				    	<option value="16">METAL-MECANICA</option>
				    	<option value="17">PLANEACION, PROG. E INFRAES.</option>
				    	<option value="18">POSGRADO</option>
				    	<option value="19">RECURSOS FINANCIEROS</option>
				    	<option value="20">RECURSOS HUMANOS</option>
				    	<option value="21">RECURSOS MATERIALES Y SERVICIOS</option>
				    	<option value="22">SERVICIOS ESCOLARES</option>
				    	<option value="23">SISTEMAS Y COMPUTACION</option>
				    	<option value="24">SUBDIRECCION ACADEMICA</option>
				    </select><br>
				<br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

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
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>