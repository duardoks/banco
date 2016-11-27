<!DOCTYPE html>
<html>

<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/highcharts.js" type="text/javascript"></script>
<script src="../js/jquery.highchartTable.js" type="text/javascript"></script>
<link href="../css/barras.css" rel="stylesheet">
<body>
<script type="text/javascript">
   

$('table.highchart')
  .bind('highchartTable.beforeRender', function(event, highChartConfig) {
    highChartConfig.colors = ['#104C4C', '#88CCCC', '#228E8E', '#CCFFFF', '#00CCCC', '#3399CC'];
  })
  .highchartTable();

 


      $(document).ready(function() {
  $('table.highchart').highchartTable();
});    


</script>

 <?php
    //incluir modulo de conexion
    include ("../admin/conexion.php");
    //abrir la conexion con el sevidor de base de datos
    $link = conectarse();   
  ?>


     <?php
     //enviar consulta
     $instruccion = "select * from datosrecogidos";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
     $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
     $n = mysqli_num_rows($rs);
     
     //devuelve una matriz que corresponde a la sentencia extraida, o falso si no 
     //quedan mas filas
     while($campo = MySQLi_fetch_array($rs)){
    ?>

   
     <?php echo $campo["Id_Datos"]; ?>
      <?php echo $campo["Valor_Datos"]; ?>
     <?php echo $campo["Fecha_Datos"]; ?>
      <?php echo $campo['Hora_Datos']; ?>

      

 <?php
     }
     //cerrar la conexion con la base de datos

    ?>


<table class="highchart"  data-graph-container-before="1" data-graph-type="column" data-graph-margin-left="300"  data-graph-margin-right="300"  >
  <thead>
      <tr>

          <th>Month</th>
          <th>Sales</th>
      </tr>
   </thead>
   <tbody heigth="200px"  width="300px">
      <tr>
          <td>January</td>
           <td data-graph-name="January" data-graph-item-color="#88CCCC">8000</td>
      
      </tr>
      <tr>
          <td>February</td>
           <td data-graph-name="January" data-graph-item-color="#CCFFFF">9000</td>
      </tr>
       <tr>
          <td>February</td>   
          <td data-graph-name="January" data-graph-item-color="#3399CC">10000</td>
      </tr>
       <tr>
          <td>February</td>
         <td data-graph-name="January" data-graph-item-color="#228E8E">11000</td>

      </tr>
  </tbody>

</table>  
<table class="highchart"  data-graph-container-before="1" data-graph-type="column" data-graph-margin-left=""  data-graph-margin-right="300" data-graph-width="300" >
  <thead>
      <tr>

          <th>Fecha</th>
          <th>Datos</th>
      </tr>
   </thead>
   <tbody heigth="200"  width="300">
   <?php
$instruccion = "select * from datosrecogidos";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
     $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
     $n = mysqli_num_rows($rs);
  while($campo2 = MySQLi_fetch_array($rs)){

  ?>

 
      <tr>
    
          <td><?php echo $campo2["Fecha_Datos"]; ?></td>
           <td data-graph-name="Alto" data-graph-item-color="#88CCCC"><?php echo $campo2["Valor_Datos"]; ?></td>
      
      </tr>
       <?php
     }
     //cerrar la conexion con la base de datos
   
    ?>
  </tbody>

<table class="highchart"  data-graph-container-before="1" data-graph-type="line" data-graph-margin-left="300"  data-graph-margin-right="300"  >
  <thead>
      <tr>  

          <th>Fecha</th>
          <th>Datos</th>
      </tr>
   </thead>
   <tbody heigth="200px"  width="300px">
   <?php
$instruccion = "select * from datosrecogidos";
     
     //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
     $rs = mysqli_query($link,$instruccion) or die("Fallo la consulta");
     
     //devuelve el numero de filas (registros) encontrados
     $n = mysqli_num_rows($rs);
  while($campo3 = MySQLi_fetch_array($rs)){

  ?>

 
      <tr>  
    
          <td><?php echo $campo3["Fecha_Datos"]; ?></td>
           <td data-graph-name="Alto" data-graph-item-color="#88CCCC"><?php echo $campo3["Valor_Datos"]; ?></td>
      
      </tr>
       <?php
     }
     //cerrar la conexion con la base de datos
     mysqli_close($link);
    ?>
  </tbody>


  
</table>
</body>
</html>