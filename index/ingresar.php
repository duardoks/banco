
<?php 
include ("conexion.php");
//recibimos las variables enviadas por el formulario 


$ap=$_POST['apellidopaterno_pos']; 
$am=$_POST['apellidomaterno_pos']; 
$pn=$_POST['primernombre_pos']; 
$sn=$_POST['segundonombre_pos']; 
$se=$_POST['sexo_pos']; 
$ec=$_POST['estadocivil_pos']; 
$dn=$_POST['dni_pos_pos']; 
$fen=$_POST['fechanacimiento_pos']; 
$pn=$_POST['lugarnacimiento_pos']; 
$di=$_POST['direccion_pos']; 
$pn=$_POST['distito_pos']; 
$tf=$POST[`telefonofijo_pos`];
$tm=$POST[`telefonomovil_pos`];
$tm=$POST[`lugarprocedencia_pos`];
$tm=$POST[`ocupacion_pos`];
$tm=$POST[ `centrolaboral_pos` ]; 



$link=conectarse();
//insertar registros 
$instruccion="INSERT INTO `bancosangre`.`postulante` (`id_usu`, `apellidopaterno_pos`, `apellidomaterno_pos`, `primernombre_pos`, `segundonombre_pos`, `sexo_pos`, `estadocivil_pos`, `dni_pos`, `fechanacimiento_pos`, `lugarnacimiento_pos`, `direccion_pos`, `distrito_pos`, `telefonofijo_pos`, `telefonomovil_pos`, `lugarprocedencia_pos`, `ocupacion_pos`, `centrolaboral_pos`) VALUES (2, 1, 'Vera', 'Campos', 'Augusto', 'Fernandez', 'm', 'soltero', '22844112', '1985-11-07', 'tacna', 'tacna', 'tacna', '32441', '955113452', 'tacna', 'conductor', 'Central de transporte 114');";
//conectamos a la base 



//insertamos los registros almacenados en las variables 
mysqli_query($link, $instruccion) or die ("fallo consulta");;
mysqli_close($link);
echo "<center><a href=\"inicio.php\">Retomar</a></center>";
?> 

