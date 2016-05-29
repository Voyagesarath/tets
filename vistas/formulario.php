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
<!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../saphv2.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="../images/favicon.ico">
    <script>
      function habilitar(value)
      {
       if(value=="1")
      {
         // habilitamos
         document.getElementById("user").disabled=false;
         document.getElementById("email").disabled=false;
         document.getElementById("pass").disabled=false;
         document.getElementById("pasadmin").disabled=true;
         document.getElementById("guardar").disabled=false;
       }else if(value=="2"){
         // deshabilitamos
         document.getElementById("user").disabled=false;
         document.getElementById("email").disabled=false;
         document.getElementById("pass").disabled=true;
         document.getElementById("pasadmin").disabled=false;
         document.getElementById("guardar").disabled=false;
       }
     }
   </script>
  </head>
  <header class="header">
  <div class="container">
  <img src="../images/header-ith.png">

</header>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="container">
<header class="header">
<div class="row">
	<?php
	//include("include/cabecera.php");
	?>
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
<BODY>
<?php
if (isset($_GET['proceso'])){
echo $_GET['proceso']."<br>";
}
?>


	<h2 style="color: #605C5C">Petici&oacuten Externa</h2>
	<hr class="soft"/>
    <h4 style="color: #837E7E"; align="center">Nuevo Servicio</h4>
    <div class="row-fluid">

<br/> 

<form name='formulario' id='formulario' method='post' action='../php/agrega-serv-externo.php' target='_self' enctype="multipart/form-data">
<div align="center">
		           		        </div>
		           		        <br>
		        <div align="center">


<h4 style="color: #837E7E"; >Numero de Control </h4>
<input type='text' name='Ncontrol' id='Ncontrol' >


<h4 style="color: #837E7E"; >Nombre completo</h4>
<input type='text' name='Nombre' id='Nombre' >


<h4 style="color: #837E7E"; >Numero de copias</h4>
<input type='text' name='Ncopias' id='Ncopias' >


<h4 style="color: #837E7E";>Adjuntar archivo: </h4>
<input type='file' name='archivo_binario' id='archivo_binario'></p>

<p>
<input type='submit' value='Enviar'>
</p>
			</div>
				<br>
				
			</form>



</BODY>





<!-- Footer
      ================================================== -->
<hr class="soften"/>
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <!--<td width="96%" align="center"><img src="editorial.png" width="820" height="100" /></td>-->
    <td>&nbsp;</td>
  </tr>
</table>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </style>
  </body>
</html>