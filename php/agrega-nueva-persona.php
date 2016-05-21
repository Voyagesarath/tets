<!DOCTYPE html>
<?php   

   
include("connect_db2.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar");
mysql_select_db($baseDatos,$con)or die(mysql_error());


	mysql_query("INSERT INTO personal (id_personal, Nom_Personal, Nom_Departamento, Correo_Electronico, ID_Departamento) VALUES ('$_POST[id]','$_POST[nombre]','$_POST[Nom_Departamento]','$_POST[email]', '$_POST[ID_Departamento]')", $con);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../vistas/usuarios.php'</script>";



?>  