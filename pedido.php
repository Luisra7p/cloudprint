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

    if (!$connection){
      echo "javascript:error()";
    }
      
    

/*
$rut = $_COOKIE["RutCookie"]; 

$result = pg_query ($connection,"select * from persona where rut=$rut; ");
    while ($row = pg_fetch_array($result))
      {   

      }
  */    ?>
                                                        <script type="text/javascript">
                                                      function error(){
                                                      window.alert('Erro en la conexion.');
                                                      window.location= './Login';
                                                      }
                                                      </script>
         
  <br><br>
<div class= "container" >

        <!-- panel body-->

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
          <form class="form-horizontal" action="pedido2.php"  method="post" enctype="multipart/form-data">
                  <fieldset>
                    <legend><h1>Pedido:</h1></legend>
        <!--  DENTRO DEL PANEL BODY-->


        
          <?php 
            $result = pg_query ("select * from papel; ") or die ("Query Error!: ");
              
              
              if (pg_num_rows($result) > 0){

                  
                  ?>
          
               
                <div class="col-lg-6">
              <table class="table table-striped table-hover table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = pg_fetch_array($result)){
                    ?>
                    <tr>
                      <td><?=$row["codigo_papel"]?></td>
                      <td><?=$row["nombre"]?></td>
                      <td><?=$row["precio"]?></td>

                    </tr>
                    <?php
                  } pg_free_result($result)
                    ?>
                    </tbody>
                </table> 
              <?php } else {echo "Error, no result.";} 

            ?>
            </div>
                         
</div>
<br><br>
<div class="row">
            <?php //===============================================================================
                $result = pg_query ($connection, "select * from papel; ") or die ("Query Error!: ");
                
                
                if (pg_num_rows($result) > 0){

                    
                    ?>

                     
                        <div class="form-group">
                                  <h3>Seleccionar codigo de papel:</h3><br>
                                  <div class="col-lg-6">
                                    <select  class="form-control" id="select" name="selectpapel" required>
                                       <?php
                      while ($row = pg_fetch_array($result)){
                      ?>
                                      <option><?=$row["codigo_papel"]?></option>
                                    
                      <?php
                    } pg_free_result($result)
                      ?>
                      </select>
                       
                <?php } else {echo "Error, no result.";} 

              ?>
                <div/>  

</div>

 <div class="row">
          <br><br>
          <?php 



            $result = pg_query ("select * from localidad; ") or die ("Query Error!: ");
              
              
              if (pg_num_rows($result) > 0){

                  
                  ?>
            
             
              <div class="col-lg-12"> 
              <table class="table table-striped table-hover table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = pg_fetch_array($result)){
                    ?>
                    <tr>
                      <td><?=$row["numero_local"]?></td>
                      <td><?=$row["nombre"]?></td>
                      <td><?=$row["direccion"]?></td>
                      <td><?=$row["telefono"]?></td>
                    </tr>
                    
                    <?php
                  } pg_free_result($result)
                    ?>
                    </tbody>
                </table> 
                    
              <?php } else {echo "Error, no result.";
            }

            ?>
            </div>
   </div>

<div class="row">

            <?php //===============================================================================
                $result = pg_query ($connection, "select * from localidad; ") or die ("Query Error!: ");
                
                
                if (pg_num_rows($result) > 0){

                    
                    ?>

                        <div class="form-group">
                                    <h3>Numero local a recoger:</h3><br>
                                  <div class="col-lg-12">
                                    <select  class="form-control" id="select" name="selectlocal" required>
                                       <?php
                      while ($row = pg_fetch_array($result)){
                      ?>
                                      <option><?=$row["numero_local"]?></option> 
                                    
                      <?php
                    } pg_free_result($result)
                      ?>
                      </select>
                       
                <?php } else {echo "Error, no result.";} 

              ?>
                <div/>  
            </div>


<br>
     
                              <div class="form-group">
                  <h3>Seleccionar:</h3><br>
                  <div class="col-lg-12">
                    <select class="form-control" id="selectcolor" name="selectcolor"  required>
                      <option value="'Color'">Color</option>
                      <option value="'Blanco y Negro'">Blanco y Negro</option>
                      
                    </select>
                    </div>
                  </div>
                 
            <br><br>
                <div class="form-group">
                    <h3>Cantidad de paginas:</h3><br>
                      <div class="col-lg-12">
                        <input class="form-control input-medium" name="cantidad" placeholder="" type="number" max="99999" required>
                         </div>
                    </div>
   
                    
                    <br><br>

                                <div class="form-group">
                                  <div class="col-lg-12 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                              </fieldset>
                            </form>

            
</div>

         


<!--  TERMINA EL FORM Y LO PROXIMO ES EL PANEL BODY-->

          </div>
        </div>
<!--  PANEL BODY-->

	   </div> <!--  termina el container-->
   <!--cierra el row-->
<!--  terminal el col-lg-12 divicion de 12 la pagina-->
<br><br>
              <div class="text-center">
                  <img src="./imagen1" class="img-polaroid">
              </div>
<br><br>

</body>
</html>