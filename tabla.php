<html>
<head>
	<title>Tabla de insertar</title>
	
</head>
<body>

<?php 

			$host="localhost";
			$user="b500024779_proyecto";
			$pass="edw910";
			$dbname="b500024779_proyecto";
			$con = ("host=$host user=$user password=$pass dbname=$dbname");
			$connection = pg_connect ($con) or die ("Error de conexion.").pg_last_error();


$rut = $_COOKIE["RutCookie"];
$pass="'$_REQUEST[pass]'";
$nombre="'$_REQUEST[nombre]'";
$apellido="'$_REQUEST[apellido]'";
$direccion="'$_REQUEST[direccion]'";
$telefono="'$_REQUEST[telefono]'";


        $result = pg_query($connection, "update persona set pass=$pass, nombre=$nombre, apellido=$apellido, direccion=$direccion, telefono=$telefono
  where rut=$rut;");
       
        if (!$result) {
          echo "Query: Un error ha occurido.\n";
          exit;
               }
          else{
             ?>
        <script type="text/javascript">window.alert('Datos actualizados correctamente!');
           window.location='./profile';
        </script>   
<?php
            //header('Location: profile.php');
          }
      
pg_close($connection);
 ?>


</body>
</html>