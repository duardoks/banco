<?php
	
	$conexion = new mysqli('servidor','usuario','password','baseDatos');
	
	$categorias = array('MES');
	$enero = array('ENERO');
	$febrero = array('FEBRERO');
	
	$consulta = "SELECT DISTINCT(categoria) FROM tblventas WHERE mes = 'enero' OR mes = 'febrero' ORDER BY categoria";
	$result = $conexion->query($consulta);
	
	while ($fila = $result->fetch_array()) {
		$categorias[] = $fila['categoria'];
	}
	
	$consulta = "SELECT categoria, mes, total FROM tblventas WHERE mes = 'enero' OR mes = 'febrero'  ORDER BY mes, categoria;";
	$result = $conexion->query($consulta);
	while($fila = $result->fetch_array()){
		if($fila['mes'] == 'ENERO')
			$enero[] = (double)$fila['total'];
		else if ($fila['mes'] == 'FEBRERO'){
			$febrero[] = (double)$fila['total'];
		}
	}

	echo json_encode( array($categorias,$enero,$febrero) );
	
?>
