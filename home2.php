<html>
<head>
  <title>Home</title>
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
      echo "javascript:error()";
    
$registros= pg_query($connection, "select nombre from  persona
                        where rut=$rut") or die("Rut solicitado no existe");
if ($row=pg_fetch_array($registros)){
  
?>

    <br/><br/>
<div class="container">
<div class="col-lg-12 center">
<div class="panel panel-default">
 <div class="panel-body">



      <div class="col-lg-6"> 
     <br>

  <h1> Bienvenido: <br><br>

  Sr(a). <?php echo $row["nombre"]; ?>
<?php echo "<br/>"."Rut: " . $_COOKIE["RutCookie"]; ?></h1>

      </div>

      <div class="col-lg-6">
        <div class="text-center">

                <br/>
                <img href= "./home" src="./imagen1"  class="img-polaroid center">
          </div>
      </div>
  </div>
</div>
</div>
</div>

 
<?Php
}
  ?> 

<script type="text/javascript">
function error(){

window.alert('Erro en la conexion.');
window.location= './Login'}

</body>
</html>