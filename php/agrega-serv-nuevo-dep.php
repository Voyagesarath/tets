<!DOCTYPE html>
<?php   

   
include("connect_db2.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar");
mysql_select_db($baseDatos,$con)or die(mysql_error());


	mysql_query("INSERT INTO reg_serv_copiado_dep (departamento, coordinador, num_copias, clave) VALUES ('$_POST[Nom_Departamento]','$_POST[coordinador]','$_POST[num_copias]','$_POST[clave]')", $con);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../vistas/servicio-copiado.php'</script>";



?>  