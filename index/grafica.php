<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://www.google.com/uds/?file=visualization&amp;v=1&amp;packages=corechart" type="text/javascript"></script>
<link href="https://www.google.com/uds/api/visualization/1.0/cc4e780f27c723c0cb35ec1e38ec2bb9/ui+es_419.css" type="text/css" rel="stylesheet">
<script src="https://www.google.com/uds/api/visualization/1.0/cc4e780f27c723c0cb35ec1e38ec2bb9/format+es_419,default+es_419,ui+es_419,corechart+es_419.I.js" type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/static/modules/gviz/1.0/core/tooltip.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
      var datos = $.ajax({
        url:'datosgrafica.php',
        type:'post',
        dataType:'json',
        async:false       
      }).responseText;
      
      datos = JSON.parse(datos);
      google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(dibujarGrafico);
      
        function dibujarGrafico() {
          var data = google.visualization.arrayToDataTable(datos);

          var options = {
            title: 'VENTAS DEL PRIMER BIMESTRE',
            hAxis: {title: 'MESES', titleTextStyle: {color: 'green'}},
            vAxis: {title: 'MILES DE PESOS', titleTextStyle: {color: '#FF0000'}},
            backgroundColor:'#ffffcc',
            legend:{position: 'bottom', textStyle: {color: 'blue', fontSize: 13}},
            width:900,
            height:500
          };

          var grafico = new google.visualization.ColumnChart(document.getElementById('grafica'));
          grafico.draw(data, options);
        }
  </script>
  </head>
  <body>
    <div id="grafica"></div>
      
    <div aria-hidden="true" style="display: none; position: absolute; top: 510px; left: 910px; white-space: nowrap; font-family: Arial; font-size: 13px;">LINEA BLANCA</div>
  </body>
</html>
