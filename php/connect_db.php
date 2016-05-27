<?php

$conexion = mysql_connect('localhost','root','');
mysql_select_db('academ', $conexion);

$user="root";
$pass="";
$server="localhost";
$bd="academ";
$con=mysqli_connect($host,$user,$pass,$bd);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}

?>