<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>ECODATA</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
    <img id="logo" src="images/logotipo.png" alt="Avatar" height="60px" width="200px">
    </button>
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
           <div class="button raised blue">
            <div class="center" href="index/reportes.php" fit ><a href="index/reportes.php" style="text-decoration:none">LOGIN</a>
            </div>

            <paper-ripple fit></paper-ripple>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
