<!DOCTYPE html>
<?php   

if (empty($_FILES['archivo']['name'])){
header("location: formulario.php?proceso=falta_indicar_fichero"); //o como se llame el formulario ..
exit;
}   
include("connect_db2.php");

$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar");
mysql_select_db($baseDatos,$con)or die(mysql_error());

// archivo temporal (ruta y nombre).
$binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;

// leer del archvio temporal .. el binario subido.
// "rb" para Windows .. Linux parece q con "r" sobra ...
$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));

// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.
$binario_Ncontrol=$_FILES['archivo']['name'];
$binario_nombre=$_FILES['archivo']['name'];
$binario_Ncopias=$_FILES['archivo']['name'];
$binario_nombre=$_FILES['archivo']['name'];
$binario_peso=$_FILES['archivo']['size'];
$binario_tipo=$_FILES['archivo']['type'];

//insertamos los datos en la BD.
	mysql_query("INSERT INTO archivos (Ncontrol, Nombre, Ncopias, archivo_Binario, archivo_Nombre, archivo_peso, archivo_tipo) VALUES ('$_POST[Ncontrol]','$_POST[Nombre]','$_POST[Ncopias]','$_POST[archivo_Binario]','$_POST[archivo_Nombre]','$_POST[archivo_peso]','$_POST[archivo_tipo]')", $con);

	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='../archivos/listar-img.php'</script>";



?>  