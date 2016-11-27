<!DOCTYPE HTML>
<html>

    <head>
        <title>BANCO DE SANGRE - HOSPITAL HIPOLITO UNANUE</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="tacna medio ambiente, sensores arduino"/>
        <meta name="keywords" content=""/>
        <link rel="stylesheet" href="../css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/index.php">Inicio</a></li>
                    <li><a href="/como-funciona">¿Cómo funciona?</a></li>
                    <li><a href="/precios">POSTULANTES</a></li>
                    <li><a href="/registrarse">MUESTRAS</a></li>
                    <li><a href="/contacto">REPORTES</a></li>
                    <li><a href="/contacto">DATOS</a></li>
                    <li><a href="/contacto">RECEPTORES</a></li>
                    <li><a href="/vista.php">VISTAS</a></li>
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
                        <h1>ingresar nuevo postulante </h1>
                    </div>  
           
                    <div class="grid6">
                        <div class="fila1">
                            <form  method="post" action="ingresar.php">
    <table  align="center"  class="tablaingreso">

    
    <tr>
        <td>Apellido Paterno</td>
          <td><input type="text" name="ap" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
    <tr>
        <td>Apellido Materno</td>
        <td><input type="text" name="am" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
    <tr>
        <td>Primer Nombre</td>
          <td><input type="text" name="pn" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>

    
    <tr>
        <td>Segundo Nombre</td>
            <td><input type="text" name="sn" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
    <tr>
        <td>Sexo</td>
         <td><input type="text" name="se" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
     <tr>
        <td>Estado Civil</td>
         <td><input type="text" name="ec" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
     <tr>
        <td>Dni</td>
        <td><input type="text" name="dni" maxlength="10" pattern="^([0-8])*$" required/></td>
    </tr>
    
    <tr>
        <td>Fecha de Nacimiento</td>
   <td><input type="datetime" name="fn" maxlength="10" pattern="^\d{4}\-\d{2}\-\d{2}$" required/></td>
    </tr>
    
    <tr>
        <td>Lugar Nacimiento</td>
          <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    
    <tr>
        <td>Direccion</td>
          <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
        <tr>
        <td>Distrito</td>
          <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
       <tr>
        <td>Telefono Fijo</td>
            <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    <tr>
        <td>Telefono Movil</td>
           <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
     <tr>
        <td>Lugar Procedencia</td>
              <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
         <tr>
        <td>Lugar Procedencia</td>
            <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
         <tr>
        <td>Ocupacion</td>
              <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
        <tr>
        <td>CentroLaboral</td>
            <td><input type="text" name="nombres" maxlength="50" pattern="^[a-zA-Z\s]*$" required/></td>
    </tr>
    <tr>

    
    <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Registrar Nuevo Cliente">
        </td>
    </tr>
    </table>

    </form>
                        </div>

    <div class="fila2">
        <table align="right" width="655" border="1" align="" cellpadding="0" cellspacing="1">
<tr bgcolor="#DDE3EE">
    <td bgcolor="#fff" class="Estilo8">ID Postilante</td>
    
    <td bgcolor="#fff" class="Estilo8">Apellido Paterno</td>
    <td bgcolor="#fff" class="Estilo8">Apellido Materno</td>
     <td bgcolor="#fff" class="Estilo8">Nombre</td>


</tr>   
<?php

    // handle post data
  include ("conexion.php");
                //abrir la conexion
                $link=conectarse();             
                 
                    
                //  if ($_REQUEST['radio1']=="titulo"){

              //  $sql="Select titulo, texto, descripcion,fecha,imagen,concat(nombre,' ',apellidos) as nombres from categoria as c 
//INNER join noticia as n ON c.idcategoria=n.idcategoria 
//INNER JOIN autor as a ON n.idautor=a.idautor  where titulo like '%$texto%' order by fecha desc ;";
                 $sql="SELECT `id_pos`, `id_usu`, `apellidopaterno_pos`, `apellidomaterno_pos`, `primernombre_pos`, `segundonombre_pos`, `sexo_pos`, `estadocivil_pos`, `dni_pos`, `fechanacimiento_pos`, `lugarnacimiento_pos`, `direccion_pos`, `distrito_pos`, `telefonofijo_pos`, `telefonomovil_pos`, `lugarprocedencia_pos`, `ocupacion_pos`, `centrolaboral_pos` FROM `bancosangre`.`postulante`  ";
                  //  if ($_REQUEST['radio1']=="titulo"){
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
    <td width="50" class="Estilo7"> <?php echo $campo["apellidopaterno_pos"]; ?></td>
    <td width="50"  class="Estilo7"> <?php echo $campo["apellidomaterno_pos"]; ?></td>
    <td width="50"  class="Estilo7"> <?php echo $campo['primernombre_pos']; ?></td>

</tr>

<?php
}
mysqli_close($link);


?>
</table>
    </div>
                    </div>
                </div>

                
   
  
 

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
    
            </div>
            <div class="grid12">
                <p align="center">2016 - (c) Todos los derechos reservados to<strong>re</strong> - Tacna - Perú</p>
            </div>
        </footer>
        
            
    </body>
</html>

