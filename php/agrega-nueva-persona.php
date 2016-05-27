<!DOCTYPE html>
<?php   
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{
	include("connect_db.php");




	mysql_query("INSERT INTO personal (id_personal, Nom_Personal, Nom_Departamento, Correo_Electronico, ID_Departamento) VALUES ('$_POST[id]','$_POST[nombre]','$_POST[Nom_Departamento]','$_POST[email]', '$_POST[ID_Departamento]')", $conexion);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../vistas/usuarios.php'</script>";
} 




?>  