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
		$result0 = pg_query ($connection, "select * from pedidos where rut_persona=$rut; ") or die ("Query Error!: ");
		
		
		if (pg_num_rows($result0) > 0){
			while ($row = pg_fetch_array($result0)){
			  	$numero_pedido= $row["numero_pedido"];
			  	$rut_persona= $row["rut_persona"];
			  	$codigo_papel= $row["codigo_papel"];
			  	$numero_localidad= $row["numero_localidad"];
			  	$cantidad= $row["cantidad"];
			  	$color= $row["color"];
			  	$total= $row["total"];
			  	
}
				
			  	}
			  	else{
             ?>
        <script type="text/javascript">window.alert('Usted No tiene pedidos, al momento.');
           window.location='./pedido';
        </script>   
<?php
            //header('Location: profile.php');
          }

			  	?>

<?php 

$result1 = pg_query ($connection, "select pedidos.numero_pedido, pedidos.cantidad,  pedidos.color, pedidos.total from pedidos where rut_persona=$rut; ") or die ("Query Error!: ");
	if($result1){	 ?>
		<h1>Detalles del pedido</h1>	
		<h3>Usuario:<?php echo $rut; ?></h3><br>
	<br><br>
	<h2>Detalles sobre la pedido: </h2><br>
		<div class= "container">	
		<table class="table table-striped table-hover table table-bordered table-condensed">
			  <thead>
			    <tr>
			      <th>Numero Pedido</th>
			      <th>Cantidad</th>
			    
			  	  <th>Especificaciones</th>
			 
			  	  <th>Total</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = pg_fetch_array($result1)){
			  	?>
			    <tr>
			    	<td><?=$row["numero_pedido"]?></td>
			      <td><?=$row["cantidad"]?></td>
			     
			      
			        <td><?=$row["color"]?></td>
	
			     <td><?=$row["total"]?></td>
			    </tr>
			    <?php
				}
			    ?>
			    </tbody>
			</table> 
		<?php } else {echo "Error, no result.";} 

	?>

<?php 

$result1 = pg_query ($connection, "select numero_local, nombre, direccion, telefono from localidad, pedidos where pedidos.rut_persona=$rut and localidad.numero_local=pedidos.numero_localidad ") or die ("Query Error!: ");
	if($result1){	 ?>
			
	<br><br>
		<div class= "container">
		<h2>Detalles sobre la localidad</h2><br>	
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



<div class="container">
	
		<form class="form-horizontal" action="./mispedidos2.php" method="post">
              <fieldset>
                          <legend>Borrar Pedido:</legend>
                          <div class="form-group">
                            <label for="input" class="col-lg-2 control-label">Numero de pedido:</label>
                            <div class="col-lg-6 number">
                              <input class="form-control number" id="input" name= "numero" placeholder="1234" type="number" max="9999" required/>
                            </div>
                          </div>


                              <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Delete</button>
                              </div>
                            </div>

</fieldset>
</form>

	</div>
		<div/>	



<div class="text-center">
<img src="./imagen1" class="img-polaroid">
</div>



</div>

<!--   ++++++++++++++++++++++++++++++++++++++++ imagen 1 ++++++++++++++++++++++++++++++++++++++++-->


	<?php






	?>

</body>
</html>