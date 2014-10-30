<html>

<head>
	<title>Actualizar</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>


<body>
	
<?php require_once("barra.php"); 
barra();
?>

	  <br/><br/>

		
<div class= "container" >
<div class="span8 center">
<div class="panel panel-default">
  <div class="panel-body">
    


<?php   echo $_COOKIE["RutCookie"]; ?>
<form action="Update1.php" method="post">
	<div class="form-group">
		      <label for="input" class="col-lg-2 control-label">Rut Cliente a modificar: </label>
		      		<div class="col-lg-10">
		        <input class="form-control" name="rut" placeholder="rut" type="text">
		         	</div>
	</div>

		    <br/><br/>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		      	<br/><br/>
		        <a href="./home" class="btn btn-default">Cancel</a>
		        <button type="submit" class="btn btn-primary">Buscar en Base de Datos</button>
		        <button TYPE="RESET" class="btn btn-default">Limpiar</button>  
		      </div>
		    </div>
		  




<!--  TERMINA EL FORM Y LO PROXIMO ES EL PANEL BODY-->

  </div>
</div>
</div>
</div>
		</form>
<!--  PANEL BODY-->

<!-- ==============================     BOTONES AL FINAR DE LA PAGINA     ========================================-->

<div class= "container" >
<div class="span8 center">


<div class="panel panel-default">
  <div class="panel-body">
</fieldset>
		  <br/><br/>

		  <div class="btn-group btn-group-justified">
					  <a href="./BuscarUpdate.php" class="btn btn-default">Insertar</a>
					  <a href="./home.php" class="btn btn-default">Inicio</a>
					  <a href="./borrar.php" class="btn btn-default">Borrar Datos </a>
			</div>
</div>
</div>
</div>
</div>
<!-- ==============================     BOTONES AL FINAR DE LA PAGINA     ========================================-->


</body>
</html>