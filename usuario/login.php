<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>LOGIN USUARIO</title>
      <link type="text/css" rel="stylesheet" href="../css/stylesUsuario.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <!--<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">-->
  </head>
  <body>
      <form method="post" action="control.php">
          <div class="container">
              <div class="profile">
                  <button class="profile__avatar" id="toggleProfile">
                      <img src="../images/logotipo.png" alt="Avatar" />
                  </button>
                  <div class="profile__form">
                      <div class="profile__fields">
                          <div class="field">
                              <input name="usuario" type="text" id="usuario" class="input" required pattern=.*\S.* />
                              <label for="usuario" class="label">Usuario</label>
                          </div>
                          <div class="field">
                              <input name="password" type="password" id="usuario" class="input" required pattern=.*\S.* />
                              <label for="password" class="label">Contraseña</label>
                          </div>
                          <div class="profile__footer">
                              <div class="button raised blue">
                                  <button name="ingresar" type="submit" class="center btn-login">INGRESAR</button>
                              </div>
                          </div>
                          <div class="profile__footer">
                              <div class="button raised blue">
                                  <a href="#" class="center btn-login">REGISTRARSE</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </form>
    
    <script src="../js/index.js"></script>
  </body>
</html>
