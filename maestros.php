<?php
//include("connect_db2.php");
$id_depa = $_GET['param_id'];

$user="root";
$pass="";
$server="localhost";
$bd="academ";

$con=mysqli_connect($host,$user,$pass,$bd);

$result = mysqli_query($con, "SELECT * FROM maestros WHERE Id_Departamento = $id_depa order by Nom_Maestro ASC");

while ($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['Nom_Maestro'].'">'.$row['Nom_Maestro'].'</option>';
}

?>