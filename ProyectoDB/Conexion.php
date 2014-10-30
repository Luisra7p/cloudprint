html>
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
			$connect = pg_connect("host=$host user=$user password=$pass dbname=$dbname");
if (!$connect)
	echo "<p><i>No me conecte a la base de datos</i></p>";
else
 	echo "<p><i>Usted se ha conectado a la base de datos</i></p>";
		$result = pg_query ("select rut from usuario; ");
		
		while ($row = pg_fetch_array($result))
			{
				echo$row["rut"]."<br>";
				
			}
	
		?>
	</body>
</html>
