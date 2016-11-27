<?php
// Conectamos base de datos
$conexion = mysqli_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($conexion,'db_ecodata') or die('No se pudo seleccionar la base de datos');
 
//preparamos la consulta
$SQLDatos = "SELECT * FROM datosrecogidos";
 
//ejecutamos la consulta
$result = mysqli_query($conexion,$SQLDatos);
//obtenemos número filas
$numFilas = mysqli_num_rows($result);
 	
//cargamos array con los nombres de las métricas a visualizar
$datos[0] = array('distancia','fecha');
 
//recorremos filas
for ($i=1; $i<($numFilas+1); $i++)
{
    $datos[$i] = array(mysqli_result($result, "Fecha_Datos"),
    (double) mysqli_result($result, "Valor_Datos"));
}
 
mysqli_close($conexion);
?>