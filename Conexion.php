<html>
	<head>
		<title>prueba</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrapresponsive.css" rel="stylesheet">
	</head>
	<body>
		<?php 

	  $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);

		if (!$connection)
			echo "javascript:error()";
		?>

<script type="text/javascript">
function error(){

window.alert('Erro en la conexion.');
window.location= './Login'}

	</body>
</html>
