<!DOCTYPE html>
<?php   

// Recibimos por POST los datos procedentes del formulario   
include("connect_db2.php");
//$departamento = $_POST["Nom_Departamento"];   
//$maestro = $_POST["maes"];
//$copias = $_POST["num_copias"];
//$clave = $_POST["clave"];
$fecha = date('Y-m-d');

   

// Abrimos la conexion a la base de datos   
//include("connect_db.php");   

//$_GRABAR_SQL = "INSERT INTO reg_serv_copiado VALUES ('$departamento','$maestro','$copias','$clave')";   
//mysql_query($_GRABAR_SQL);  

// Cerramos la conexion a la base de datos   
//include("cierra_conxionbd.php");   

// Confirmamos que el registro ha sido insertado con exito   
 
//echo '<script>alert("Los datos han sido guardados con exito")</script> ';
			//echo "<script>location.href='servicio-copiado.php'</script>";

			//action="agrega-serv-nuevo.php" method="post"
//include("connect_db2.php");
$con=mysql_connect($host,$user,$pass) or die ("Problemas al conectar");
mysql_select_db($baseDatos,$con)or die(mysql_error());
$departamento = $_POST["Nom_Departamento"];
$departamento1 = mysqli_query($con, "SELECT Nom_Departamento FROM departamento where Id_Departamento = $departamento");

//if (@$_POST['BtnGuardar']) {
	mysql_query("INSERT INTO reg_serv_copiado (departamento, maestro, num_copias, clave, fecha) VALUES ('$departamento1','$_POST[maestro]','$_POST[num_copias]','$_POST[clave]','$fecha')", $con);
	//echo "datos insertados correctamente";
	echo '<script>alert("Datos Guardados Con Exito")</script> ';
		
		echo "<script>location.href='servicio-copiado.php'</script>";
//}

//$_POST[Nom_Departamento]
?>   

