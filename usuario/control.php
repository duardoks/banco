<?php

include_once("conexion.php");
/*include_once("lib/fecha.php");*/

$link = conectarse();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuario WHERE codigo_usu = '$usuario' AND clave_usu = '$password' AND nivel_usu='usuario';";
echo($sql);
$rs = mysql_query($sql);
echo (mysql_num_rows($rs));

if (isset($_POST['ingresar'])) {
    if (mysql_num_rows($rs) != 0) {
        session_start();
        $_SESSION['autentificado'] = "SI";
        header("Location: listaPostulantes.php?autentificado=si");
    }
    else{
        header("Location: login.php?errorusuario=si");
    }
}
elseif (isset($_POST['salir'])) {
    session_start();
    session_destroy();
    header("Location: index.php");
}

/*mysql_free_result($rs);*/
/*mysql_close($con);*/

?>
