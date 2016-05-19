
<?php
//include("connect_db2.php");

$user="root";
$pass="";
$server="localhost";
$bd="academ";

$con=mysqli_connect($host,$user,$pass,$bd);

$result = mysqli_query($con, "SELECT * FROM departamento order by Nom_Departamento asc");

while ($row = mysqli_fetch_array($result)){
	echo '<option value="'.$row['Id_Departamento'].'">'.$row['Nom_Departamento'].'</option>';
}

?>