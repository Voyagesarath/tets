<!DOCTYPE html>
<?php   
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{
   
include("connect_db2.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar");
mysql_select_db($baseDatos,$con)or die(mysql_error());


	mysql_query("INSERT INTO login (user, password, email, pasadmin) VALUES ('$_POST[user]','$_POST[pass]','$_POST[email]','$_POST[pasadmin]')", $con);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../vistas/users.php'</script>";
}


?>  