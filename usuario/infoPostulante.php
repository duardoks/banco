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
    <h3 class="titulos">DETALLE POSTULANTES</h3>

    <a href="#main" class="button">Ver datos</a>
</header><!-- /header -->

<section id="main">
    <div class="container white-bg">
        <h1>LISTA DE POSTULANTES</h1>
        <?php
        include("conexion.php");
        $id_pos = $_GET["id_pos"];

        header('Content-Type: text/html; charset=utf-8' );
        $link = Conectarse();
        $instruccion = "SELECT * 
                        FROM postulante p WHERE p.id_pos = '$id_pos';";

        $rs = mysql_query($instruccion)
        or die ("Fallo en la consulta");
        $campo=MySQL_fetch_array($rs);

        ?>

        <form class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Apellido Paterno</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["apellidopaterno_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Apellido Materno</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["apellidomaterno_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Primer Nombre</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["primernombre_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Segundo Nombre</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["segundonombre_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Sexo</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["sexo_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Estado Civil</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["estadocivil_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">DNI</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["dni_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Fecha de nacimiento</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["fechanacimiento_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Lugar de nacimiento</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["lugarnacimiento_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Dirección</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["direccion_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Distrito</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["distrito_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Teléfono fijo</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["telefonofijo_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Teléfono Movil</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["telefonomovil_pos"]?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2  col-xs-12 control-label">Ocupación</label>
                    <div class="col-lg-10 col-xs-12">
                        <input type="text" class="form-control" id="" placeholder="" value="<?php echo $campo["ocupacion_pos"]?>">
                    </div>
                </div>
            </fieldset>
        </form>

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