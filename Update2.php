<html>
<head>
<title>Problema</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
<?php

			$host="localhost";
			$user="b500024779_proyecto";
			$pass="edw910";
			$dbname="b500024779_proyecto";
			$con = ("host=$host user=$user password=$pass dbname=$dbname");
			$connection = pg_connect ($con) or die ("Error de conexion.");


      $registros1 = pg_query($connection,"Select rut 
                                          from persona 
                                          where rut='$_REQUEST[rutnuevo]'");
if (pg_num_rows($registros1) == 0){


          $registros0= pg_query($connection, "update persona, pedido
                                    set rut='$_REQUEST[rutnuevo]', rut_persona 
                                  where rut='$_REQUEST[rutviejo]'"); 

            if (!$registros0)
            {
                
                  ?>
          <script type="text/javascript">
          window.alert("No se modifico el rut en la base de datos.");
           history.back()
          </script>
                  <?php 

            }

            else
            {
              ?>
          <script type="text/javascript">
          window.alert("El rut fue modificado con exito.");
           history.back()
          </script>
                  <?php 
            }

  }   
  else {

    ?>
          <script type="text/javascript">
          window.alert('Rut de usuario invalido. Intente otra vez.');
          history.back()
          </script>

<?php 
        }
?>


</body>
</html>
