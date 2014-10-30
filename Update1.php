<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>


<body>

	  <br/><br/>	

<?php

require_once("barra.php"); 
barra();

      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con) or die ("Error en la conexion.".pg_last_error());


$registros= pg_query($connection, "select * from persona
                        where rut='$_POST[rut]'") or
  die("Rut solicitado no existe");


  
if ($reg=pg_fetch_array($registros))
{
?>


  	
<div class= "container" >
<div class="span8 center">
<div class="panel panel-default">
  <div class="panel-body">
    



<form action="Update2.php" method="post">


	<div class="form-group">
		      <label for="input" class="col-lg-2 control-label">Ingrese Rut Nuevo:</label> 
		      		<div class="col-lg-10">
		        <input class="form-control" name="rutnuevo" placeholder="<?php echo "Rut viejo: ".$reg['rut'] ?>" type="text">
		         	</div>
	</div>

<input type="hidden" name="rutviejo" value="<?php echo $reg['rut'] ?>">


		    <br/><br/>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		      	<br/><br/>
		        <a href="./home.php" class="btn btn-default">Cancel</a>
		        <button type="submit" class="btn btn-primary"> Modificar </button>
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
<br/><br/>
 



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

   <?php
}
else 
  echo "";
 
?>

<br/><br/><br/><br/><br/><br/><br/><br/>
<div class= "container" >
<div class="span8 center">

<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Error</h3>
  </div>
  <div class="panel-body">
    No existe el rut ingresado. Favor de intertar otra vez.

</fieldset>
      <br/><br/>

      <div class="btn-group btn-group-justified">
            <a href="./home" class="btn btn-default">Inicio</a>
            <a href="./BuscarUpdate" class="btn btn-default">Regresar </a>
      </div>


  </div>
</div>
  </div>
</div>
 



<!-- Form original

<form action="Update2.php" method="post">
Ingrese nuevo rut:
<input type="text" name="rutnuevo" value="<?php echo $reg['rut'] ?>">
<br>
<input type="hidden" name="rutviejo" value="<?php echo $reg['rut'] ?>">
<input type="submit" value="Modificar">
</form>

-->


</body>
</html>