<!--sendemail correcciones-->

<?php
session_start();
if (@!$_SESSION['Nom_Personal']) {
    header("Location:../index.php");
}else{

include("connect_db.php");

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$asunto = $_POST['asunto'];
$departamento = $_POST['departamento'];
$num_copias = $_POST['num_copias'];
$clave = $_POST['clave'];
$fecha = date('Y-m-d');
$estatus = "Pendiente";

echo $nombre.','.$departamento.','.$num_copias.','.$fecha.','.$clave.','.$estatus;
$mensaje = $_POST['mensaje'] ."\nNumero de Copias: ".$num_copias."\nClave: ".$clave."\n Fecha: ".$fecha;

mysql_query("INSERT INTO solicitudes_maestros (departamento, maestro, num_copias, clave, fecha, estatus) VALUES ('$departamento','$nombre','$num_copias','$clave','$fecha', '$estatus')", $conexion);

$header = 'From: '.$correo." \r\n".
           "X-Mailer: PHP/".phpversion(). " \r\n";

$contenido = "Este mensaje fue enviado por ".$nombre.
             "Asunto: ".$asunto.
             "Contenido: ".$mensaje;

$destino = "editorial.ith@gmail.com";
$asunto = 'Asunto del mail recibido';



if(mail($destino, $asunto, utf8_decode($contenido), $header))
{
	echo '<script>alert("Correo enviado con exito")</script>';
}
else
{
	echo '<script>alert("Error Al Enviar el Mensaje")</script> ';
	echo "<script>location.href='../vistas/principal-maestros.php'</script>";
	
}
}
?>


<!--sendemail1

<?php
//$nombre = $_POST['nombre'];
//$correo = $_POST['email'];
//$asunto = $_POST['asunto'];

//$header = 'From: ' . $correo . " \r\n";
//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
//$header .= "Mime-Version: 1.0 \r\n";
//$header .= "Content-Type: text/plain";

//$mensaje = "Este mensaje fue enviado por " . $nombre . ".
// Archivo: " . $asunto . " \r\n";
//$mensaje .= "E-mail: " . $correo . " \r\n";
//$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
//$mensaje .= "Enviado el " . date('d/m/Y', time());

//$para = 'editorial.ith@gmail.com';
//$asunto = 'Asunto del mail recibido';

//mail($para, $asunto, utf8_decode($mensaje), $header);

//echo 'Mensaje enviado correctamente';
?>
-->
