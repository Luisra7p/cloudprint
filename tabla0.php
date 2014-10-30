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


$rut ="'$_REQUEST[rut]'";
$pass="'$_REQUEST[pass]'";
$nombre="'$_REQUEST[nombre]'";
$apellido="'$_REQUEST[apellido]'";
$direccion="'$_REQUEST[direccion]'";
$telefono="'$_REQUEST[telefono]'";



$result0= pg_query($connection, "select rut from persona where rut=$rut");

  if(pg_num_rows($result0) == 1){
    ?>
<script type="text/javascript">window.alert('Rut invalido. Favor de verificar.');
           window.location='./Form';
        </script>  
<?php 
  }
else{

        $result1 = pg_query($connection, "insert into persona values($rut,$pass, $nombre, $apellido, $direccion, $telefono);");
       
        if (!$result1) {
          echo "Query: Un error ha occurido.\n";
          exit;
               }
          else{
             ?>
        <script type="text/javascript">window.alert('Usuario creado correctamente! Favor de iniciar seccion.');
           window.location='./Login';
        </script>   
<?php
            //header('Location: profile.php');
          }
        }
      
pg_close($connection);
 ?>


</body>
</html>