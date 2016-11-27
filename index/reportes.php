<!DOCTYPE HTML>
<html>

	<head>
		<title>Ecodata - Sistema de analisis de datos medio ambientales</title>
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
   		 include ("../admin/conexion.php");
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
          <li><a href="../vista.php">VISTAS</a></li>
				</ul>
			</nav>
			<a href="#"><img id="logo" src="../images/logotipo.png" alt=""></a>
					
				<h1 class="frase_banner">Datos e información medioambiental precisa y certera</h1>
				
				<a href="#" class="button">Ver datos</a>
		</header><!-- /header -->



		<section id="main">

		<div class="container">
				<div class="fila">
					<div class="mensaje">	
              <h1 >Datos <?php  $condicion2 =  $_COOKIE["valor2"]; echo $condicion2; ?></h1>
						<h1 id="datos">Datos <?php echo $condicion2; ?></h1>
            <h1 id="datos2" name="datos2" hidden="yes"><?php echo $condicion2; ?></h1>
   
              


       


            <select id='tipo' name='dato' multiple="multiple" >
            <option selected="yes" disabled="yes"> Elegir </option>
						       <?php
						//Select distinct  Id_Sensor,idTipo_Sen,Modelo_Sen   from sensor inner join tipossensor where idTipo_Sen=2 ; 




         
						$consulta_mysql='Select Nombre_TipoS,Id_TipoSensor from tipossensor; ';
						$resultado_consulta_mysql=mysqli_query($link,$consulta_mysql);
						  
					    
						while($fila=mysqli_fetch_array($resultado_consulta_mysql)){

						if($campo["nombres"]==$fila['nombres'])
							{
						    echo "<option class='op' id='op' value='".$fila['Id_TipoSensor']."' onChange=javascript.location.reload()>".$fila['Nombre_TipoS'] ."</option>";
						    }
						    else 
						    {
						  echo "<option class='op' id='op' value='".$fila['Id_TipoSensor']."'  onChange=javascript.location.reload()>".$fila['Nombre_TipoS']."</option>";
						    }
						  
						     
						}
						echo "</select>"; 
               
						?>
           <select id='tipossensor' name='dato' multiple="multiple" >
            <option selected="yes" disabled="yes"> Elegir </option>
                       <?php
            //Select distinct  Id_Sensor,idTipo_Sen,Modelo_Sen   from sensor inner join tipossensor where idTipo_Sen=2 ; 
                     //  $variablePHP = “<script> document.write(variableJS) </script>”;
 

         //Select distinct  Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen=1; 
           
             $condicion =  $_COOKIE["valor"];
            
   //  echo $condicion." asdasdasd " . $valor2;
            $consulta_mysql="Select distinct Id_Sensor,idTipo_Sen,Modelo_Sen from sensor inner join tipossensor where idTipo_Sen= ".$condicion."; ";
            $resultado_consulta_mysql=mysqli_query($link,$consulta_mysql);
              
            
            while($fila=mysqli_fetch_array($resultado_consulta_mysql)){
            if($campo["nombres"]==$fila['nombres'])
              {
                echo "<option class='op2' value='".$fila['Id_Sensor']."' onChange=javascript.location.reload()>".$fila['Modelo_Sen']."</option>";
                }
                else 
                {
              echo "<option  class='op2' value='".$fila['Id_Sensor']."' onChange=javascript.location.reload()>".$fila['Modelo_Sen']."</option>";
                }
              
                 
            }
            echo "</select>"; 
               
            ?>

            <select id='fechasensor' name='dato' multiple='multiple'>
             <option selected="yes" disabled="yes"> Elegir </option>
              <?php
            //Select distinct  Id_Sensor,idTipo_Sen,Modelo_Sen   from sensor inner join tipossensor where idTipo_Sen=2 ; 
                     //  $variablePHP = “<script> document.write(variableJS) </script>”;
 

         //Select distinct  Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen=1; 

              $condicionid=$_COOKIE["idsensor"];
         
             echo "".$condicionid. $condicion;
   //  echo $condicion." asdasdasd " . $valor2;
            $consulta_mysql="Select distinct  Hora_Dat,Fecha_Dat,Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen='".$condicion."' and where='".$condicionid."'; ";
            $resultado_consulta_mysql=mysqli_query($link,$consulta_mysql);
              
           // echo "<select id='fechasensor' name='dato' multiple=multiple' width='40%'>";
            while($fila=mysqli_fetch_array($resultado_consulta_mysql)){
            if($campo["nombres"]==$fila['nombres'])
              {
                echo "<option class='op2' value='".$fila['Fecha_Dat']."'>".$fila['fechasensor']."</option>";
                }
                else 
                {
              echo "<option class='op2' value='".$fila['Fecha_Dat']."'>".$fila['fechasensor']."</option>";
                }
              
                 
            }
            echo "</select>"; 
               
            ?>

						<div id="div" class="grid6">
        
   

               <script type="text/javascript">
               
              $( "#tipo" )
                .change(function () {
                  var str = "";

                  $( " .op:selected " ).each(function() {
                    str += $( this ).text() + " ";
                    location.reload();
                  });
                    var valor = $(this).val()+"";
               //    $( "#datos" ).text( str + valor);
                  $( "#datos" ).text( str );
                   $( "#datos2" ).text(valor);
               
                  document.cookie ='valor2='+str+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
                 document.cookie ='valor='+valor+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
                       document.cookie ='idsensor='+idsensor+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';       
                })
                .change();


                 
              $( "#tipossensor" )
                .change(function () {
                  var str2 = "";

                  $( " .op2:selected " ).each(function() {
                    str2 += $( this ).text() + " ";
                    location.reload();
                  });
                    var idsensor = $(this).val()+"";
                 $( "#datos" ).text( str2 + idsensor);
                 // $( "#datos" ).text( str );
                   //$( "#datos2" ).text(valor);
                document.cookie ='idsensor='+idsensor+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
                    document.cookie ='valor='+valor+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';
                
                             
                })
                .change();
           
              
              </script>

              


           </div>  

     




					<table class="highchart"  data-graph-container-before="1" data-graph-type="column"   data-graph-color-1="#90DD42"  >
					  <thead>
					      <tr>  

					          <th  data-graph-datalabels-enabled="0">Fecha</th>
					          <th  data-graph-datalabels-enabled="0 ">Datos</th>
					      </tr>
					   </thead>		
					   <tbody heigth="200px"  width="300px">




   <?php

   



	$instruccion = "Select distinct  Hora_Dat,Fecha_Dat,Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen='".$condicion."'  ORDER BY Fecha_Dat  ;";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
     $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
     $n = mysqli_num_rows($rs);
     


  	while($campo3 = MySQLi_fetch_array($rs)){

  	?>

 
      <tr>  
    
          <td hidden="yes" ><?php echo $campo3["Fecha_Dat"]; ?></td>
           <td hidden="yes" data-graph-name="<?php echo $campo3["Hora_Dat"]; ?>" "><?php echo $campo3["Valor_Dat"]; ?></td>
      
      </tr>
       <?php
     }
     //cerrar la conexion con la base de datos
    
    ?>
  	</tbody>
		</div>
    </table>
		<div class="grid6">
    
		<table class="highchart"  data-graph-container-before="1" data-graph-type="column"  data-graph-color-1="#90DD42"    >
 		 <thead>
    	  <tr>  
          <th  data-graph-datalabels-enabled="0">Fecha</th>
          <th  data-graph-datalabels-enabled="0">Datos</th>
     	 </tr>
   		</thead>
   		<tbody heigth="200px"  width="300px">
   		<?php
		$instruccion = "SELECT DISTINCT Hora_Dat,Fecha_Dat,Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen='".$condicion."' ORDER BY Fecha_Dat DESC LIMIT 10 ;";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
    	 $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
    	 $n = mysqli_num_rows($rs);
  		while($campo3 = MySQLi_fetch_array($rs)){

  ?>

 
     	 <tr>  
    
          <td><?php echo $campo3["Fecha_Dat"]; ?></td>
          <td data-graph-name="<?php echo $campo3["Hora_Dat"]; ?>" ><?php echo $campo3["Valor_Dat"]; ?></td>
      
     	 </tr>
       <?php
     	}
     //cerrar la conexion con la base de datos
   
   		 ?>
  </tbody>


  
</table>
				</div>
		<div class="grid6">
		<table class="highchart"  data-graph-container-before="1" data-graph-type="line" data-graph-margin-left="" data-graph-color-1="#90DD42" >
  <thead>
      <tr>

          <th>Fecha</th>
          <th>Datos</th>
      </tr>
   </thead>
   <tbody heigth="200"  width="300">
   <?php
$instruccion = "Select distinct  Hora_Dat,Fecha_Dat,Id_Sensor,idTipo_Sen,Modelo_Sen,idSensor_Dat,Valor_Dat   from sensor inner join tipossensor inner join datorecogido on id_Sensor=idSensor_Dat  where idTipo_Sen='".$condicion." ' ORDER BY Fecha_Dat ASC LIMIT 10 ;";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
     $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
     $n = mysqli_num_rows($rs);
  while($campo2 = MySQLi_fetch_array($rs)){

  ?>

 
      <tr>
    
          <td><?php echo $campo2["Fecha_Dat"]; ?></td>
           <td data-graph-name="<?php echo $campo3["Hora_Dat"]; ?>" "><?php echo $campo2["Valor_Dat"]; ?></td>
      
      </tr>
       <?php
     }
     //cerrar la conexion con la base de datos
  
    ?>
  </tbody>
</table>
				</div>
		




  
 
    
   


		</section>

		<footer>
			<div class="grid5">
				<h1><span>eco</span>data</h1>
				<p>Pronto tendremos una API para que cualquier maker pueda conectarse a nuestra aplicación construyendo sus propios módulos.</p>
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
				<p align="center">2016 - (c) Todos los derechos reservados eco<strong>data</strong> - Tacna - Perú</p>
			</div>
		</footer>
		
			
	</body>
</html>