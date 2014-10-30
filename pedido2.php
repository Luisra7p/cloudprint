<html>
<head>
<title>Pedido</title>
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
      
    


$rut = $_COOKIE["RutCookie"]; 
/*
$result = pg_query ($connection,"select * from persona where rut=$rut; ");
    while ($row = pg_fetch_array($result))
      {   

      }*/
      ?>
                         <script type="text/javascript">
                            function error(){
                            window.alert('Erro en la conexion.');
                            window.location= './Login';
                            				}
                          </script>
   
<?php 

$codigo= $_REQUEST["selectpapel"];
$local=$_REQUEST["selectlocal"];
$cantidad=$_REQUEST['cantidad'];
$selectcolor= $_REQUEST["selectcolor"];


/*if ($_REQUEST['radio1'])
{
    echo ;
}
else
{
  if ($_REQUEST["radio2"])
  {
   echo $_REQUEST["radio2"];
  }
}*/
?>
<div class="container">


<?php 

            $result = pg_query ("select * from papel, localidad where codigo_papel=$codigo and numero_local=$local; ") or die ("Query Error! aqui 1: ");
              
              
              if (pg_num_rows($result) > 0){

                  
                  ?>
          
               
                <div class="col-lg-12">
              <table class="table table-striped table-hover table table-bordered table-condensed">
                  <thead>
                    <tr>
          
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = pg_fetch_array($result)){
                    ?>
                    <tr>
                
                      <td><? $total = $cantidad * $row["precio"]; "$".$total;?></td>
                    </tr>
                    <?php
                  } pg_free_result($result)
                    ?>
                    </tbody>
                </table> 
              <?php } else {echo "Error, no result.";} 

            ?>
            </div>
<?php 
 $result = pg_query($connection, "INSERT INTO pedidos (rut_persona, codigo_papel, numero_localidad, cantidad, color, total) values ($rut, $codigo, $local, $cantidad, $selectcolor, $total);");
       
        if (!$result) {
          echo "Query: Un error ha occurido aqui 2.\n";
          exit;
               }
          else{
             ?>
        <script type="text/javascript">window.alert('Pedido enviado correctamente!');
           window.location='./home2';
        </script>   
<?php
            //header('Location: profile.php');
          }
      
pg_close($connection);
 ?>

</div> <?php //container ?>
</body>
</html>
