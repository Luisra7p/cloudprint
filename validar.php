<html>
<head>
<title>Acceso</title>


  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">


</head>
<body>
<?php
      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);

$rutvalidar="'$_REQUEST[rut]'";
$passvalidar="'$_REQUEST[pass]'";


                            $value = "$_REQUEST[rut]";
                             setcookie("RutCookie", $value, time()+3600);  /* expira en una hora */
                          

$registros= pg_query($connection, "select rut, pass from  persona
                        where rut= $rutvalidar AND pass= $passvalidar") or die("Rut solicitado no existe");

if (pg_num_rows($registros)==1)
{

  header('Location: home2');

//<!--==================================== LO SIGUIENTE MUESTRA ERROR EN EL INPUT==================================-->
}
else 
{

?>
<!--   ++++++++++++++++++++++++++++ BARRA SUPERIOR COMIENZO++++++++++++++++++++++++++++++++++++++++-->

<div class= "container" >
  <div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    <!--   PRIMER ENLACE EN LA BARRA -->
        <a class="navbar-brand" href="./home" <i class="icon-home icon-white">Print Center</a>
    <!--   SEGUNDO ENLACE EN LA BARRA -->
    </div>
    
<ul class="nav navbar-nav navbar-right">
          <li><a href="./Form">Sign Up</a></li>     
    </ul>


     <ul class="nav navbar-nav navbar-right">
          <li><a href="./contacto">Contact</a></li>     
    </ul>

  </div>
</div>




<!--   ++++++++++++++++++++++++++++ BARRA SUPERIOR FINAL++++++++++++++++++++++++++++++++++++++++-->
<div class= "container" >
  
  <div class="row">
    <div class="col-lg-6">

      <div class="panel panel-default">
        <div class="panel-body">
    

            <form class="form-horizontal" action="validar.php" method="post">
              <fieldset>
                          <legend>Login</legend>
                          <div class="form-group">
                            <label for="input" class="col-lg-2 control-label">Rut</label>
                            <div class="col-lg-10 ">
                               <input class="form-control number" id="inputEmail" name= "rut" placeholder="123456789" type="number" max="9999999999" required/>
                            </div>
                          </div>
                          

                          <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="inputPassword" name= "pass" placeholder="Password" type="password" maxlength="30" required/>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                              </label>
                              </div>
                            </div>
                          </div>
                              <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset"class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                        </fieldset>
                      </form>
        </div>
      </div>
    </div>

 
        <div class="col-lg-6">
        <div class="text">
                            
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h3 class="panel-title">Error</h3>
                    </div>
                    <div class="panel-body">
                      Error al entrar los datos. Favor de varificar el rut (9 numeros sin el guion (-)) y password. 

                        </fieldset>
                        <br/><br/>

                        <div class="btn-group btn-group-justified">   
                        </div>
                        </div>
                        </div>
                    </div>
                  </div>
                   


                  </div>
       

        </div>  
        </div> 
  </div>
</div>

 <?php
}

  ?>







</body>
</html>