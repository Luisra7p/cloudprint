<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
  <title>barra</title>

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
<style type="text/css">
  .bs-example{
      margin: 20px;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>

<?php function barra(){
?>

<!-- ++++++++++++++++++++++++++++ BARRA SUPERIOR COMIENZO++++++++++++++++++++++++++++++++++++++++-->

  <div class="bs-example">
     <div class= "container" >
    <nav  class="navbar navbar-inverse" role="navigation">
     
              <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--   PRIMER ENLACE EN LA BARRA -->
              <a class="navbar-brand" href="home2">Print Center</a>
              <!--   SEGUNDO ENLACE EN LA BARRA -->
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
              <ul class="nav navbar-nav">
            
                <li><a href="./profile">Profile</a></li>
                 <li><a href="./pedido">Print</a></li>
                  <li><a href="./mispedidos">My Orders</a></li>
                  
             
            <!--  lISTA DROPDOWN PARA MOSTRAR VARIAS ELECCIONES-->
            




              <!-- pRIMER ENLACE EN LA PARTE DERECHA DE LA BARRA-->
          </ul>
              <ul class="nav navbar-nav navbar-right">



                
                <li><a href="javascript:verificarEntrada()" >Salir</a></li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="addlocal">Agregar Localidad</a></li>
                      <li><a href="addpapel">Agregar Papel</a></li>
                

                      <li class="divider"></li>
                      <li><a href="./Consulta">Consultas</a></li>

                      <li class="divider"></li>
                       <li><a href="./borrarpapel">Borrar Papel</a></li>
                       <li><a href="./borrarlocal">Borrar Localidad</a></li>

                      <li class="divider"></li>
                      <li><a href="javascript:verificarEntrada()">Salir</a></li>
                    </ul>
                  </li>
                <!-- SEGUNDO GRUPO DE ENLACES EN FORMA DROPDOWN  -->

               </ul>
            </div>
          </div>

    
    </div>
  </nav>
</div>
<!--   ++++++++++++++++++++++++++++ BARRA SUPERIOR FINAL++++++++++++++++++++++++++++++++++++++++-->

<!--//<a href="javascript:verificarEntrada()-->
<script type="text/javascript">
  function verificarEntrada()
  {
    if (window.confirm('Desea salir de Print Center?'))
    {
      window.location='./Login';
      setcookie ("RutCookie", "", time() - 3600);
    }
    else
    {
      //window.alert('No hay problema');
    }
  }
</script>

<?php
}
 ?>
</body>
</html>
