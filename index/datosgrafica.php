<?php 
	$conexion = new mysqli('localhost','root','','db_ecodata');
	/* Creo los 3 arreglos con su primer elemento*/
$categorias = array('FECHA');//categoria
$enero = array('HORA');//mes
$febrero = array('HORA2');
$consulta = "SELECT DISTINCT(Fecha_Datos) FROM datosrecogidos";		


/* Se ejecuta la consulta*/
$result = $conexion->query($consulta);
 
/*Recorro el resultado y guardo los nombres de las categorías en el arreglo*/
while ($fila = $result->fetch_array()) {
    $categorias[] = $fila['Fecha_Datos'];
}
 
/* Creo la segunda consulta que obtiene los totales d ventas */
$consulta = "SELECT Fecha_Datos , Hora_Datos, Valor_Datos FROM datosrecogidos ";
/* Se ejecuta la consulta*/
$result = $conexion->query($consulta);
/*Recorro el resultado y guardo los nombres de las categorías en el arreglo correspondiente*/
while($fila = $result->fetch_array()){
    if($fila['Hora_Datos'] == '00:00:01')
  $enero[] = $fila['Valor_Datos'];
    else if ($fila['Hora_Datos'] == '00:00:02')
  $febrero[] = $fila['Valor_Datos'];
}
 
/* Preparo la respuesta que se va a regresar como JSON*/
echo json_encode( array($categorias,$enero,$febrero) );
 ?>

