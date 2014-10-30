<html>
<head>
	<title>mispedidos2</title>
	 <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
</head>
<body>
<?php require_once("barra.php"); barra(); //enlace a la barra?>

 <?php 

$rut = $_COOKIE["RutCookie"];
$numero= $_REQUEST["numero"];

      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);

    if (!$connection)
      echo "javascript:error()";



$registros= pg_query($connection, "select numero_pedido from  pedidos
                        where numero_pedido=$numero");

if (pg_num_rows($registros)==0)
{
?>
   <script type="text/javascript">  window.alert('Pedido no realizado.');
history.back();
   </script>


//<!--==================================== LO SIGUIENTE MUESTRA ERROR EN EL INPUT==================================-->
<?php 
 
}
else 
{


$result1= pg_query($connection, "Delete from pedidos where numero_pedido=$numero and rut_persona=$rut;") or
    die("Problemas en el delete");



 ?>

 <script type="text/javascript">  window.alert('Pedido borrado satisfactoriamente.');
 history.back();</script>
 <?php }?>
<script type="text/javascript">
function error(){

window.alert('Erro en la conexion.');
window.location= './Login'}

</body>
</html>
