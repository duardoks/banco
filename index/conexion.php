<?php
function conectarse()
{
//conectar con el servidor de base de datos
if(!($link = mysqli_connect("localhost", "root", "")))	
{
	echo "Error conectando a la Base de Datos.";
	exit();
}

if(!mysqli_select_db(($link),"bancosangre"))
	{
		echo "Error seleccionando Base de Datos.";
	
	}
	 mysqli_query($link,"SET NAMES 'utf8'");
	return $link;
}	
?>
