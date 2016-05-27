<!DOCTYPE html>
<?php   
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{
   
include("connect_db.php");




	mysql_query("INSERT INTO login (user, password, email, pasadmin) VALUES ('$_POST[user]','$_POST[pass]','$_POST[email]','$_POST[pasadmin]')", $conexion);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../vistas/users.php'</script>";
}


?>  