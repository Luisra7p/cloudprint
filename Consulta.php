<html>
<head>
	<title>Consulta</title>
		<link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
</head>
<body>


  <?php require_once("barra.php"); barra(); //enlace a la barra?>

	<?php
	$rut = $_COOKIE["RutCookie"];
			$host="localhost";
			$user="b500024779_proyecto";
			$pass="edw910";
			$dbname="b500024779_proyecto";
			$con = ("host=$host user=$user password=$pass dbname=$dbname");
			$connection = pg_connect ($con);
if (!$connection)
	echo "No me conecte a la base de datos";



//===============================================================================
		$result = pg_query ("select * from persona; ") or die ("Query Error!: ");
		
		
		if (pg_num_rows($result) > 0){

				
				?>
	<br><br>
	<div class="conteiner">
<h1>Consulta de los usuarios en la base de datos:</h1>

	
		<div class= "container">	
		<table class="table table-striped table-hover table table-bordered table-condensed">
			  <thead>
			    <tr>
			      <th>Rut</th>
			      <th>Nombre</th>
			      <th>Apellido</th>
			      <th>Direccion</th>
			  	  <th>Telefono</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = pg_fetch_array($result)){
			  	?>
			    <tr>
			      <td><?=$row["rut"]?></td>
			      <td><?=$row["nombre"]?></td>
			      <td><?=$row["apellido"]?></td>
			      <td><?=$row["direccion"]?></td>
			      <td><?=$row["telefono"]?></td>
			    </tr>
			    <?php
				} pg_free_result($result)
			    ?>
			    </tbody>
			</table> 
		<?php } else {echo "Error, no result.";} 

	?>



<?php 
//===============================================================================
		$result = pg_query ("select * from pedidos; ") or die ("Query Error!: ");
		
		
		if (pg_num_rows($result)){

				
				?>
	<br><br>
	<div class="conteiner">
<h1>Consulta las ordenes: </h1>

	
		<div class= "container">	
		<table class="table table-striped table-hover table table-bordered table-condensed">
			  <thead>
			    <tr>
			      <th>Numero de pedido</th>
			      <th>Rut Usuario</th>
			      <th>Cantidad</th>
			     <th>Color</th>
			     <th>Total</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = pg_fetch_array($result)){
			  	?>
			    <tr>
			    	<td><?=$row["numero_pedido"]?></td>
			      <td><?=$row["rut_persona"]?></td>
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
		<div/>
		<div/>	



</div>
</body>
</html>