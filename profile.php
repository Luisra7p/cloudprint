<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="http://docencia.inf.udp.cl/~500024779/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
  
</head>
<body>   

<?php 
require_once("barra.php"); 
barra();


      $host="localhost";
      $user="b500024779_proyecto";
      $pass="edw910";
      $dbname="b500024779_proyecto";
      $con = ("host=$host user=$user password=$pass dbname=$dbname");
      $connection = pg_connect ($con);

    if (!$connection)
      echo "javascript:error()";
    


$rut = $_COOKIE["RutCookie"]; 

$result = pg_query ($connection,"select * from persona where rut=$rut; ");
    while ($row = pg_fetch_array($result))
      {

        ?>
         
  <br>
<div class= "container" >
  <div class="row">

    <div class="col-lg-12 center">
<!-- panel body-->

<div class="panel panel-default">
  <div class="panel-body">
    
<!--  DENTRO DEL PANEL BODY-->

<div class="col-lg-6">
<div class="well bs-component">


      <form class="form-horizontal" action="tabla.php" method="post">
      <fieldset>
        <legend> Actualizar informacion personal:</legend>

        <div class="form-group">
          <label for="disabledInput" class="col-lg-2 control-label">Rut:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="rut"  value= <?php echo $rut;?> disabled="" autocomplete="off" required>
          </div>
        </div>

       <div class="form-group">
               <label for="inputPassword" class="col-lg-2 control-label">Password:</label>
              <div class="col-lg-10">
                 <input class="form-control input-medium" id="inputPassword" name= "pass"  value='<?=$row["pass"]?>' type="password" autocomplete="off" required>
                 </div>
               </div>
          

        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Name:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="nombre"  value="<?=$row["nombre"]?>" type="text" maxlength="30" autocomplete="off"required>
             </div>
        </div>

    <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Last Name:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium"  name="apellido"  value="<?=$row["apellido"]?>" type="text" maxlength="30" autocomplete="off" required>
             </div>
        </div>

        <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Direction:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="direccion"  value="<?=$row["direccion"]?>" type="text"maxlength="100"  autocomplete="off" required>
             </div>
        </div>


    <div class="form-group">
          <label for="input" class="col-lg-2 control-label">Phone:</label>
          <div class="col-lg-10">
            <input class="form-control input-medium" name="telefono"  value="<?=$row["telefono"]?>" type="number" max="9999999999" autocomplete="off" required>
             </div>
        </div>
<?php 
      }
    ?>
        <br/>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <br/>
            <button type="submit" class="btn btn-primary">Save</button>

          </div>
        </div>
      </fieldset>
   

    </form>

</div> <!-- TERMINA EL WELL BS-COMPONENT -->
</div>
    <div class="col-lg-6">
<br><br><br>
       <div class="text-center">
          <img src="./imagen1" class="img-polaroid">
            </div>

    </div>   



</div>

	</div>

<!--  TERMINA EL FORM Y LO PROXIMO ES EL PANEL BODY-->

  </div>
</div>
<!--  PANEL BODY-->

	</div> <!--  termina el container-->
</div>   <!--  terminal el col-lg-12 divicion de 12 la pagina-->

<br><br><br><br><br><br>
<script type="text/javascript">
function error(){

window.alert('Erro en la conexion.');
window.location= './Login';
}

</body>
</html>