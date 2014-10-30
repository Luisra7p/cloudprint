<?php
			$host="localhost";
			$user="b500024779_proyecto";
			$pass="edw910";
			$dbname="b500024779_proyecto";

			$connection = pg_connect("host=$host user=$user password=$pass dbname=$dbname");
if (!$connection)
	echo "<p><i>No me conecte a la base de datos</i></p>";
else
 	echo "<p><i>Usted se ha conectado a la base de datos</i></p>";
		$result = pg_query ("select * from persona; ");
		
		while ($row = pg_fetch_array($result))
			{
				echo$row["rut"]. " " . $row["nombre"] ." ".  $row["apellido"] ." ".  $row["direccion"] ." ".  $row["telefono"] ." ". "<br>";
				
			}
	
		?>
