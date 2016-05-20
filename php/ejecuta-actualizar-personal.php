<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="UPDATE personal SET Nom_Personal='$_POST[nombre]', Nom_Departamento='$_POST[departamento]', Correo_Electronico=$_POST[email], where id_personal='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ../vistas/usuarios.php");
		
		echo "<script>location.href='../vistas/usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../vistas/usuarios.php'</script>";

		
	}
?>