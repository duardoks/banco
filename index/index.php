<!DOCTYPE HTML>
<html>

	<head>
		<title>BANCO DE SANGRE - HOSPITAL HIPOLITO UNANUE</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="tacna medio ambiente, sensores arduino"/>
		<meta name="keywords" content=""/>
		<link rel="stylesheet" href="../css/estilo.css" />

	</head>
	<body>
		<header>
			<nav>
				<ul>
		        	<li><a href="index.php">Inicio</a></li>
					<li><a href="como-funciona">¿Cómo funciona?</a></li>
					<li><a href="ingresar_postulante.php">POSTULANTES</a></li>
					<li><a href="registrarse">MUESTRAS</a></li>
					<li><a href="contacto">REPORTES</a></li>
					<li><a href="contacto">DATOS</a></li>
					<li><a href="contacto">RECEPTORES</a></li>
					<li><a href="vista.php">VISTAS</a></li>
					<li><a href="vista.php">VISTAS</a></li>
				</ul>
			</nav>
			<a href="#"><img id="logo" src="../images/logotipo.png" class="imagen" height="20%" width="20%" alt=""></a>
					
				<h1 class="frase_banner">BANCO DE SANGRE HOSPITAL HIPOLITO DE UNANUE</h1>
				
				<a href="#" class="button">Ver datos</a>
		</header><!-- /header -->

		<section id="main">
			
			<div class="container">
				<div class="fila">
					<div class="mensaje">
						<h1>GESTION DE MANEJO DE ORDENES/TRANSFUSIONES/MUESTRAS </h1>
					</div>	
					<div class="grid6">
						<img src="../images/arduino.png" class="imagen" width="100%">
					</div>
					<div class="grid6">
						<p>Sistema de administracion de datos acerca del manejo de muestras de sangre .</p>
						<p>Esta herramientas nos permite monitorizar la gestion de las muestras en nuestro stock y darle seguiminiento a su uso .</p>
						<br>
						<a href="#" class="botoninfo">¿Cómo Funciona?</a>
					</div>
				</div>

				<div class="fila">
					<div class="mensaje">
						<h1>Ubicación</h1>
					</div>
   
  
 
    <div id="map"></div>
    <script type="text/javascript">

function initMap() {
  var sensor1 = new google.maps.LatLng(-18.014895765203164,-70.25552988052368);
  var sensor2 = new google.maps.LatLng(-18.014895765203164,-70.25552988052368);

  var map = new google.maps.Map(document.getElementById('map'), {
    center: sensor1,	
    zoom: 19
  });	

    var marker = new google.maps.Marker({
    animation: google.maps.Animation.DROP,
     position: sensor1,
    map: map,
    title: 'Hello World!'
  });
      marker.addListener('click', toggleBounce);


  var coordInfoWindow = new google.maps.InfoWindow();
  coordInfoWindow.setContent(createInfoWindowContent(sensor2, map.getZoom()));
  coordInfoWindow.setPosition(sensor2);
  coordInfoWindow.open(map);
     
  map.addListener('zoom_changed', function() {
    coordInfoWindow.setContent(createInfoWindowContent(sensor2, map.getZoom()));
    coordInfoWindow.open(map);
  });
}

var TILE_SIZE = 256;

function createInfoWindowContent(latLng, zoom) {
  var scale = 1 << zoom;

  var worldCoordinate = project(latLng);

  var pixelCoordinate = new google.maps.Point(
      Math.floor(worldCoordinate.x * scale),
      Math.floor(worldCoordinate.y * scale));

  var tileCoordinate = new google.maps.Point(
      Math.floor(worldCoordinate.x * scale / TILE_SIZE),
      Math.floor(worldCoordinate.y * scale / TILE_SIZE));

  return [
    'Ubicacion',
    'LatLng: ' + latLng,
    'Zoom level: ' + zoom,

  ].join('<br>');
}
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
// The mapping between latitude, longitude and pixels is defined by the web
// mercator projection.
function project(latLng) {
  var siny = Math.sin(latLng.lat() * Math.PI / 180);

  // Truncating to 0.9999 effectively limits latitude to 89.189. This is
  // about a third of a tile past the edge of the world tile.
  siny = Math.min(Math.max(siny, -0.9999), 0.9999);

  return new google.maps.Point(
      TILE_SIZE * (0.5 + latLng.lng() / 360),
      TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
}

    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7NojYXhCpQ0U1ihGMJ-fWB0pe7j36saU	
&callback=initMap"
        async defer></script>

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