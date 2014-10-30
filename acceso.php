<html>
<head>
  <title>Acceso</title>


  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">


</head>
<body>
<?php
      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);


?>
<div class= "container" >
              <h2 class="short">Acceso Registrados</h2>
              
            

              <div class="alert alert-warning hidden" id="loginErrorH">
                <strong>Error!</strong> Su cuenta de usuario no se encuentra registrada.<a href="./Form">¿Aun no esta registrado?</a>
                </div>
                <div class="alert alert-warning hidden" id="loginpassErrorH">
                    <strong>Error!</strong> Su contraseña no es válida.<a href="./Contacto" >¿Olvido su contraseña? Contactenos</a>
                 </div>
                 <div class="alert alert-warning hidden" id="loginactiveErrorH">
                     <strong>Error!</strong> Su cuenta se encuentra inactiva. Revise su corre o pongace en contacto con nosotros <a href="./contacto">AQUÍ</a>
                </div>

              
              <form id="loginFormH" action="post" novalidate="novalidate">
                <div class="row">
                  <div class="form-group">
                    
                    <div class="col-md-12">
                      <label>Ingrese su E-Mail *</label>
                      <input type="email" value="" data-msg-required="Por favor ingrese su E-mail." data-msg-email="Por favor ingrese una cuenta de E-Mail Válida." maxlength="100" class="form-control" name="email" id="email">
                                                                                        
                    </div>
                                       <div class="col-md-12">
                      <label>Ingrese su Contraseña *</label>
                      <input type="password" value="" data-msg-required="Por favor ingrese su contrasena." maxlength="100" class="form-control" name="password" id="password">
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Ingresar" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                  </div>
                </div>
                                                            
                <button class="btn btn-link" type="button" id="olvidopass">¿Olvido su contraseña?</button> | <button class="btn btn-link" type="button" id="noregistro">¿Aun no esta registrado?</button>
                  
              
              </form>
            
</div>



</body>
</html>