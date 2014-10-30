<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
</head>
<body>



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
                            <div class="col-lg-10 number">
                              <input class="form-control number" id="input" name= "rut" placeholder="123456789" type="number" max="999999999" required/>
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
                                <button type="reset"href= "./Login" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                        </fieldset>
                      </form>
        </div>
      </div>
    </div>

        <div class="col-lg-6">
        <div class="text-center">
          <img src="./imagen1" class="img-polaroid">
        <p>It is free and always will be.</p>
        <p><a href= "./Form" class="btn btn-primary btn-lg">Sign Up!</a></p>

        </div>  
        </div> 
  </div>
</div>


   
    
</body>
</html>
