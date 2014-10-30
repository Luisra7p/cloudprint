<html>
<head>
	<title>Agregar</title>
	 <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
</head>
<body>
<?php require_once("barra.php"); barra(); //enlace a la barra?>

 <?php 

$rut = $_COOKIE["RutCookie"];
$name= $_REQUEST["nombre"];
$direccion= $_REQUEST["direccion"];
$telefono= $_REQUEST["telefono"];

      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);

    if (!$connection)
      echo "javascript:error()";



$registros= pg_query($connection, "insert into localidad(nombre, direccion, telefono) values ('$name', '$direccion', $telefono)");

if ($registros)
{
?>
<script type="text/javascript">  window.alert('Localidad agragada satisfactoriamente!');
history.back();
   
   </script>


//<!--==================================== LO SIGUIENTE MUESTRA ERROR EN EL INPUT==================================-->
<?php 
 
}
else 
{
?>
<script type="text/javascript">  window.alert('Localidad no agragada.');
history.back();



 <script type="text/javascript">  window.alert('Pedido borrado satisfactoriamente.');
 history.back();</script>
 <?php }?>
<script type="text/javascript">
function error(){

window.alert('Erro en la conexion.');
window.location= './Login'}

</body>
</html>