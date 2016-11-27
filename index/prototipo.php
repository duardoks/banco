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
					<li><a href="../precios">Precios</a></li>
					<li><a href="../registrarse">Registrarse</a></li>
					<li><a href="../contacto">Contacto</a></li>
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
						<h1 id="datos">Prototype <?php echo $condicion2; ?></h1>
            <h1 id="datos2" name="datos2" hidden="yes"><?php echo $condicion2; ?></h1>
   
                


						<div id="div" class="mensaje" >
        
<table class="highchart"  data-graph-container-before="1" data-graph-type="column"  data-graph-color-1="#3399CC"  data-graph-color-2="#90DD42"  >
  <thead>
      <tr>

          <th>Mes</th>
          <th>Datos1</th>
          <th>Datos2</th>
      </tr>
   </thead>
   <tbody heigth="200px"  width="300px">
      <tr>
          <td>Enero</td>
           <td  data-graph-item-color="#3399CC">8000</td>
           <td " data-graph-item-color="#90DD42">1000</td>
      
      </tr>
      <tr>
          <td>Febrero</td>
           <td data-graph-item-color="#3399CC">9000</td>
           <td  data-graph-item-color="#90DD42">11000</td>

      </tr>
       <tr>
          <td>Marzo</td>     
          <td  data-graph-item-color="#3399CC">10000</td>
         <td data-graph-item-color="#90DD42">11000</td>
      </tr>
       <tr>
          <td>Abril</td>
         <td data-graph-item-color="#3399CC">9000</td>
        <td  data-graph-item-color='#90DD42'>5000</td>
      </tr>
        <tr>
          <td>Mayo</td>
         <td data-graph-item-color="#3399CC">1000</td>
        <td  data-graph-item-color='#90DD42'>5000</td>
      </tr>
        <tr>
          <td>Junio</td>
         <td data-graph-item-color="#3399CC">9000</td>
        <td  data-graph-item-color='#90DD42'>5000</td>
      </tr>
        <tr>
          <td>Julio</td>
         <td data-graph-item-color="#3399CC">8000</td>
        <td  data-graph-item-color='#90DD42'>15000</td>
      </tr>
      <tr>
          <td>Agosto</td>
         <td data-graph-item-color="#3399CC">8000</td>
        <td  data-graph-item-color='#90DD42'>15000</td>
      </tr>
      <tr>
          <td>Setiembre</td>
         <td data-graph-item-color="#3399CC">1000</td>
        <td  data-graph-item-color='#90DD42'>7000</td>
      </tr>
      <tr>
          <td>Octubre</td>
         <td data-graph-item-color="#3399CC">8000</td>
        <td  data-graph-item-color='#90DD42'>7000</td>
      </tr>
      <tr>
          <td>Noviembre</td>
         <td data-graph-item-color="#3399CC">8000</td>
        <td  data-graph-item-color='#90DD42'>15000</td>
      </tr>
      <tr>
          <td>Diciembre</td>
         <td data-graph-item-color="#3399CC">1000</td>
        <td  data-graph-item-color='#90DD42'>18000</td>
      </tr>
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