<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:../index.php");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editorial ITH</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link href="../bootstrap/css/bootstrap2.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme2.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme2.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>

<!--<script src="../bootstrap/js/bootstrap2.min.js"></script>-->

</head>

  <style type="text/css">
body {
    background-color: ##F2F2F2;
    
}
body,td,th {
    color: ##000000;
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
              <li><a href="../php/desconectar.php"> Cerrar Cesi??n </a></li>          
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
        <div class="well well-small">
        <hr class="soft"/>
        <h4 align="center">Genera Reportes de Servicios</h4>
        <div class="row-fluid">
        <p align="center">
          Para generar un reporte general de un "personal" en especifico da clic <a href="reporte-usuario.php">aqui</a>.<br><br>
          Para generar un reporte general por "departamento" en especifico da clic <a href="reporte-departamento.php">aqui</a>.
        </p>
        

<body>

    <section>
    <table border="0" align="center">
    	<tr>
        	<td>Desde&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-desde"/></td>
            <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-hasta"/></td>
            
            <td width="200"><a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Exportar Busqueda a PDF</a></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros"></div>
</div></div>
    
      

</body>
</html>
