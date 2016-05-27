<?php 
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
else{
$host="localhost";
$user="root";
$pass="";
$baseDatos="academ";

$conexion=mysql_connect($host,$user,$pass)or die("NO se pudo establecer la conexion ".mysql_error());

}
?>