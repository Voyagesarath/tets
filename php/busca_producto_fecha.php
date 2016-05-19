<?php
include('../connect_db.php');

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM reg_serv_copiado WHERE fecha BETWEEN '$desde' AND '$hasta' ORDER BY 	id_reg_serv_copiado ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="30">ID Servicio</th>
                <th width="50">Departamento</th>
                <th width="150">Maestro</th>
                <th width="150">Numero de Copias</th>
                <th width="150">Clave</th>
                <th width="50">Fecha</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['id_reg_serv_copiado'].'</td>
				<td>'.$registro2['departamento'].'</td>
				<td>'.$registro2['maestro'].'</td>
				<td>'.$registro2['num_copias'].'</td>
				<td>'.$registro2['clave'].'</td>
				<td>'.fechaNormal($registro2['fecha']).'</td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>
