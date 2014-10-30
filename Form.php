<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>	 

<!--   ++++++++++++++++++++++++++++ BARRA SUPERIOR COMIENZO  nueva++++++++++++++++++++++++++++++++++++++++-->

<div class= "container" >
  <div class="navbar navbar-inverse navbar-static-top">
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
          <li><a href="./contacto">Contact</a></li>     
    </ul>

    

    <ul class="nav navbar-nav navbar-right">
          <li><a href="./Login">Login</a></li>     
    </ul>



  </div>
</div>
<!--   ++++++++++++++++++++++++++++ BARRA SUPERIOR FINAL nueva++++++++++++++++++++++++++++++++++++++++-->




<div class= "container" >
  <div class="row">

    <div class="col-lg-12 center">

<!-- panel body-->

<div class="panel panel-default">
  <div class="panel-body">
    
<!--  DENTRO DEL PANEL BODY-->

<div class="col-lg-6">
<div class="well bs-component">


<form class="form-horizontal" action="tabla0.php" method="post">
      <fieldset>
        <legend> Please complete the following information: </legend>
        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Rut:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="rut" placeholder="123456789"  type="number" minlength="9" max="999999999" required>
          </div>
        </div>

       <div class="form-group">
               <label for="inputPassword" class="col-lg-2 control-label">Password:</label>
              <div class="col-lg-10">
                 <input class="form-control input-medium" id="inputPassword" name= "pass" placeholder="Password" type="password" required>
                 </div>
               </div>
          

        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Name:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="nombre" placeholder="Name" type="text" maxlength="30" required>
             </div>
        </div>

    <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Last Name:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium"  name="apellido" placeholder="Last Name" type="text" maxlength="30"required>
             </div>
        </div>

        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Direction:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="direccion" placeholder="Direction" type="text"maxlength="100" required>
             </div>
        </div>


    <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Phone:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="telefono" placeholder="7873215456" type="number" max="999999999" required>
             </div>
        </div>

        <br/>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <br/>
            <a href="./home" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button TYPE="RESET" class="btn btn-default">Reset</button>  
          </div>
        </div>
      </fieldset>
   

    </form>

</div> <!-- TERMINA EL WELL BS-COMPONENT -->
</div>
    <div class="col-lg-6">

      <br/><br/><br/><br/>
               <div class="container">
                <div class="row">
                  <div class="span2"></div>
                  <div class="span2"><img href= "./home" src="./imagen1"  class="img-polaroid centered"></div>
                  <div class="span2"></div>
                </div>
            </div>

    </div>   



</div>

	</div>

<!--  TERMINA EL FORM Y LO PROXIMO ES EL PANEL BODY-->

  </div>
</div>
<!--  PANEL BODY-->

	</div> <!--  termina el container-->
</div>   <!--  terminal el col-lg-12 divicion de 12 la pagina-->


</body>
</html>