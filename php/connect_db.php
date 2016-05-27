<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{

$conexion = mysql_connect('localhost','root','');
mysql_select_db('academ', $conexion);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
}
?>