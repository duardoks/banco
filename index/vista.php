  <!DOCTYPE HTML>
<html>

	<head>
		<title>Banco de Sangre</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="tacna medio ambiente, sensores arduino"/>
		<script type="text/javascript" src="js/chart.js"></script>
		<link rel="stylesheet" href="../css/estilo.css" />
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js"></script>
   		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/highcharts.js" type="text/javascript"></script>
		<script src="../js/jquery.highchartTable.js" type="text/javascript"></script>
  
	



  	<script type="text/javascript">
 

		$('table.highchart')
  		.bind('highchartTable.beforeRender', function(event, highChartConfig) {
    	highChartConfig.colors = ['#90DD42', '#88CCCC', '#228E8E', '#CCFFFF', '#00CCCC', '#3399CC'];
  		})
  		.highchartTable();
		 $(document).ready(function() {
 		 $('table.highchart').highchartTable();
		});    
        </script>	

        <meta name="keywords" content=""/>
		  
	   </head>
       

 		<?php
   		 //incluir modulo de conexion
   		 include ("conexion.php");
   		 //abrir la conexion con el sevidor de base de datos
   		 $link = conectarse();   
  		 ?>


	<body>


		<header>
			<nav>
				<ul>
				  <li><a href="../index">Inicio</a></li>
          <li><a href="../como-funciona">¿Cómo funciona?</a></li>
          <li><a href="../precios">POSTULANTES</a></li>
          <li><a href="../registrarse">MUESTRAS</a></li>
          <li><a href="../contacto">REPORTES</a></li>
          <li><a href="../contacto">DATOS</a></li>
          <li><a href="../contacto">RECEPTORES</a></li>
          <li><a href="../vistas.php">VISTAS</a></li>
				</ul>
			</nav>
			<a href="#"><img id="logo" src="../images/logotipo.png" alt=""></a>
					
				<h1 class="frase_banner">PostuLANTE</h1>
				
				<a href="#" class="button">Ver datos</a>
		</header><!-- /header -->



		
		<div class="container">
				<div class="fila">
					<div class="mensaje">	
          <section id="main">

<article>
<br>
<br>
<br>
<h2>Busqueda de tablas </h2>

<form id="form1" name="form1" method="post" action="">
      


  <label></label>
  <label></label> 
 <table align="center" width="596" border="1" align="center" cellpadding="0" cellspacing="1"></table>
 <tr>
    <td width="352">Texto buscar:   <input name="texto" type="text" id="texto" size="35" ></input></td> 
     <td width="352"><input  type="submit" id="buscar" name="buscar" value="Buscar"></input></td> 
 </tr>
 <tr>
 <td>&nbsp</td>
  <td>&nbsp</td>
 </tr>
</form> 

  <?php 
        
                
    
                ?> 
                <table align="center" width="655" border="1" align="center" cellpadding="0" cellspacing="1">
<tr bgcolor="#DDE3EE">
    <td bgcolor="#fff" class="Estilo8">ID Postilante</td>
     <td bgcolor="#fff" class="Estilo8">ID Usuario</td>
    <td bgcolor="#fff" class="Estilo8">Apellido Paterno</td>
    <td bgcolor="#fff" class="Estilo8">Apellido Materno</td>
<td bgcolor="#fff" class="Estilo8">Primer Nombre</td>
    <td bgcolor="#fff" class="Estilo8">Segundo Nombre</td>


</tr>   
<?php

 if (!empty($_POST))
{
    // handle post data
 
                //abrir la conexion
                $link=conectarse();             
                    $texto=$_POST['texto'];
                    //depuramos espacios en blanco
                    trim($texto);
  
                    if (!$texto){
                    echo "No has introducido la clave de busqueda";
                    exit;
                    }
                //  if ($_REQUEST['radio1']=="titulo"){

              //  $sql="Select titulo, texto, descripcion,fecha,imagen,concat(nombre,' ',apellidos) as nombres from categoria as c 
//INNER join noticia as n ON c.idcategoria=n.idcategoria 
//INNER JOIN autor as a ON n.idautor=a.idautor  where titulo like '%$texto%' order by fecha desc ;";
                 $sql="SELECT `id_pos`, `id_usu`, `apellidopaterno_pos`, `apellidomaterno_pos`, `primernombre_pos`, `segundonombre_pos`, `sexo_pos`, `estadocivil_pos`, `dni_pos`, `fechanacimiento_pos`, `lugarnacimiento_pos`, `direccion_pos`, `distrito_pos`, `telefonofijo_pos`, `telefonomovil_pos`, `lugarprocedencia_pos`, `ocupacion_pos`, `centrolaboral_pos` FROM `bancosangre`.`postulante` where primernombre_pos like '%$texto%';";
                   // }
                //  elseif ($_REQUEST['radio1']=="autor") {
                //      $sql="select * from noticias where autor like '%$texto%'";
                //  }
                //  elseif ($_REQUEST['radio1']=="categoria") {
                //      $sql="select * from noticias where categoria like '%$texto%'";
                //  }
                    //or articulo like '%$texto%';
                    $resultado = mysqli_query($link,$sql) or die ("fallo consulta");;
                    $num_resultados = mysqli_num_rows($resultado);
                    //si sale eerror borro las dos primeras lineas
                    
                     



while($campo=MySQLi_fetch_array($resultado)) {

?>
<tr>    
    <td width="114" class="Estilo7"> <?php echo $campo["id_pos"]; ?></td>
    <td width="114" class="Estilo7"> <?php echo $campo["id_usu"];  ?>"</td>
    <td width="220" class="Estilo7"> <?php echo $campo["apellidopaterno_pos"]; ?></td>
    <td width="79"  class="Estilo7"> <?php echo $campo["apellidomaterno_pos"]; ?></td>
    <td width="63"  class="Estilo7"> <?php echo $campo['primernombre_pos']; ?></td>
    <td width="78"  class="Estilo7"> <?php echo $campo["segundonombre_pos"]; ?></td>
</tr>

<?php
}
mysqli_close($link);
}

?>
</table>

   
  </article>
</section>
		




  
 
    
   




    <footer>
      <div class="grid5">
        <h1><span>TO</span>RE</h1>
        <p>Hospital Hipolito unanue, Aplicacion de gestion de manejo de muestras de sangre</p>
        <a href="#" class="btnlittle">Quienes Somos</a>
        <a href="#" class="btnlittle">El Equipo</a>
      </div>
      <div class="grid4">
        <h2>Contacto</h2>
        <p>Campus Capanique,<br>
        Av. Jorge Basadre Grohmann s/n Pocollay - Tacna<br>
        Escuela de Ing. de Sistemas <br>
        +51 952929939</p>
      </div>
      <div class="grid3">
        <h2>Redes Sociales</h2>
        <a href="#" class="btnlittle">Facebook</a><br><br>
        <a href="#" class="btnlittle">Twitter</a><br><br>
        <a href="#" class="btnlittle">Youtube</a>
      </div>
      <div class="grid12">
        <p align="center">2016 - (c) Todos los derechos reservados to<strong>re</strong> - Tacna - Perú</p>
      </div>
    </footer>
    
      
		
			
	</body>
</html>