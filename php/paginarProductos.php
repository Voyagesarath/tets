<?php
	include('connect_db.php');
	$paginaActual = $_POST['partida'];

    $nroProductos = mysql_num_rows(mysql_query("SELECT * FROM reg_serv_copiado"));
    $nroLotes = 10;
    $nroPaginas = ceil($nroProductos/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}

  	$registro = mysql_query("SELECT * FROM reg_serv_copiado LIMIT $limit, $nroLotes ");


  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover">
          <tr>
              <th width="30">ID Servicio</th>
                <th width="50">Departamento</th>
                <th width="150">Maestro</th>
                <th width="150">Numero de Copias</th>
                <th width="150">Clave</th>
                <th width="50">Fecha</th>
            </tr>';
				
	while($registro2 = mysql_fetch_array($registro)){
		$tabla = $tabla.'<tr>
        <td>'.$registro2['id_reg_serv_copiado'].'</td>
        <td>'.$registro2['departamento'].'</td>
        <td>'.$registro2['maestro'].'</td>
        <td>'.$registro2['num_copias'].'</td>
        <td>'.$registro2['clave'].'</td>
        <td>'.fechaNormal($registro2['fecha']).'</td>
        </tr>';	
	}
        

    $tabla = $tabla.'</table>';



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>