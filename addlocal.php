<html>
<head>
	<title>My Orders</title>
	
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">


</head>
<body>
 <?php require_once("barra.php"); barra(); //enlace a la barra?>





<!--   ++++++++++++++++++++++++++++++++++++++++ imagen 1 ++++++++++++++++++++++++++++++++++++++++-->
<div class= "container" >
<?php 
			$host="localhost";
			$user="b500024779_proyecto";
			$pass="edw910";
			$dbname="b500024779_proyecto";
			$con = ("host=$host user=$user password=$pass dbname=$dbname");
			$connection = pg_connect ($con);
if (!$connection)
	echo "No me conecte a la base de datos";

$rut = $_COOKIE["RutCookie"]; 

//===============================================================================
		

				
		
			  	?>

<?php 

$result1 = pg_query ($connection, "select * from localidad") or die ("Query Error!: ");
	if($result1){	 ?>
			
	<br><br>
		<div class= "container">	
		<table class="table table-striped table-hover table table-bordered table-condensed">
			  <thead>
			    <tr>
			      <th>Numero Local</th>
			      <th>Nombre</th>
			      <th>Direccion</th>
			  	  <th>Telefono</th>
			  	    
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = pg_fetch_array($result1)){
			  	?>
			    <tr>
			    	<td><?=$row["numero_local"]?></td>
			      <td><?=$row["nombre"]?></td>
			      <td><?=$row["direccion"]?></td>
			     <td><?=$row["telefono"]?></td>
			    </tr>
			    <?php
				}
			    ?>
			    </tbody>
			</table> 
		<?php } else {echo "Error, no result.";} 

	?>

	
		<form class="form-horizontal" action="./addlocal2.php" method="post">
              <fieldset>
                          <legend>Agregar Local:</legend>
                          


        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Name:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="nombre" placeholder="Name" type="text" maxlength="30" required>
             </div>
        </div>


        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Direction:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="direccion" placeholder="Direction" type="text" maxlength="100" required>
             </div>
        </div>


    <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Phone:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="telefono" placeholder="7873215456" type="number" max="999999999" required>
             </div>
        </div>



                              <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                              </div>
                            </div>

</fieldset>
</form>

	</div>



<div class="text-center">
<img src="./imagen1" class="img-polaroid">
</div>



</div>

</body>
</html>