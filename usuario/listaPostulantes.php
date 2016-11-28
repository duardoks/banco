<!DOCTYPE HTML>
<html>

<head>
    <title>BANCO DE SANGRE - HOSPITAL HIPOLITO UNANUE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="tacna medio ambiente, sensores arduino"/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" href="../css/estiloUsuario.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="listaPostulantes.php">Inicio</a></li>
            <li><a href="login.php">Salir</a></li>
        </ul>
    </nav>
    <a href="#"><img id="logo" src="../images/logotipo.png" class="imagen" height="20%" width="20%" alt=""></a>

    <h1 class="titulos">BANCO DE SANGRE HOSPITAL HIPOLITO DE UNANUE</h1>
    <h3 class="titulos">LISTA POSTULANTES</h3>

    <a href="#main" class="button">Ver datos</a>
</header><!-- /header -->

<section id="main">
    <div class="container white-bg">
        <h1>LISTA DE POSTULANTES</h1>
        <div class="tabla-postulantes">
            <?php
            include("conexion.php");

            header('Content-Type: text/html; charset=utf-8' );
            $link = Conectarse();
            $instruccion = "SELECT p.id_pos ,p.apellidopaterno_pos, p.apellidomaterno_pos, p.primernombre_pos, p.segundonombre_pos, p.sexo_pos FROM postulante p;";
            ?>
            <table class="table table-striped table-responsive">
                <thead class="td">
                    <tr class="salmon-bg">
                        <td>Apellidos</td>
                        <td>Primero Nombre</td>
                        <td>Sexo</td>
                        <td>Tipo de Sangre</td>
                        <td>Información</td>
                    </tr>
                </thead>
                <tbody class="td">
                    <?php
                    $rs = mysql_query($instruccion)
                    or die ("Fallo en la consulta");
                    $n = mysql_num_rows($rs);
                    while ($campo=MySQL_fetch_array($rs)){
                        ?>
                        <tr>
                            <td><?php   echo $campo ["apellidopaterno_pos"] . " " .$campo ["apellidomaterno_pos"]; ?></td>
                            <td><?php   echo $campo ["primernombre_pos"]; ?></td>
                            <td><?php   echo $campo ["sexo_pos"]; ?></td>
                            <td></td>
                            <td><a href="infoPostulante.php?id_pos=<?php echo $campo ["id_pos"];?>" class="">Ver info</a></td>
                        </tr>
                        <?php
                    }
                    mysql_close($link);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<footer class="row container-fluid">
    <div class="col-md-4 col-xs-12">
        <h1><span>TO</span>RE</h1>
        <p>Hospital Hipolito unanue, Aplicacion de gestion de manejo de muestras de sangre</p>
        <a href="#" class="btnlittle">Quienes Somos</a>
        <a href="#" class="btnlittle">El Equipo</a>
    </div>
    <div class="col-md-4 col-xs-12">
        <h2>Contacto</h2>
        <p>Campus Capanique,<br>
            Av. Jorge Basadre Grohmann s/n Pocollay - Tacna<br>
            Escuela de Ing. de Sistemas <br>
            +51 952929939</p>
    </div>
    <div class="col-md-4 col-xs-12">
        <h2>Redes Sociales</h2>
        <a href="#" class="btnlittle">Facebook</a><br><br>
        <a href="#" class="btnlittle">Twitter</a><br><br>
        <a href="#" class="btnlittle">Youtube</a>
    </div>
    <div class="col-xs-12">
        <p align="center">2016 - (c) Todos los derechos reservados to<strong>re</strong> - Tacna - Perú</p>
    </div>
</footer>


</body>
</html>