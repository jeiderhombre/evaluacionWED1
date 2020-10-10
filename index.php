<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="jeicss.css" type="text/css" media="screen">
</head>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <span class="navbar-brand disabled" href="#">MENU DE EVALUACION:</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="evaluacionWEB1.php">suma</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bodytech.php">BodyTech</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="amor.php">Spring Step</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="areglo.php">Bancolombia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calcularSalario.php">Calcular Salario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="erika.php">Erika</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<main>
  <form class="mt-3" action="index.php" method="POST">
    <div class="container-fluid card">
      <h5 class="card-header text-center">Supermercado</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-12 cent" style="text-align: center;">
            <h5 class="card-title">Datos del Usuario</h5>
          </div>
        </div>

        <div class="row">
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem; text-align: center;">
            <label from="usuario">Cliente:<input name="clien" type="text"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem; text-align: center;">
            <label from="vaMax">Valor maximo:<input name="vaMax" type="number" title="valor maximo de compra"></label>
          </div>
        </div>

        <div class="centH col-12 sis" style="text"><hr class="sis" /></div>

        <div class="row">
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <h5 class="card-title cent">Nombre Producto</h5>
            <label form="producto">Producto: <input name="pro" type="text"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <h5 class="card-title">Valor Producto</h5>
            <label form="valor">Valor: <input name="val" type="number"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="producto">Producto: <input name="pro1" type="text"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="valor">Valor: <input name="val1" type="number"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="producto">Producto: <input name="pro2" type="text"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="valor">Valor: <input name="val2" type="number"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="producto">Producto: <input name="pro3" type="text"></label>
          </div>
          <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
            <label form="valor">Valor: <input name="val3" type="number"></label>
          </div>
        </div>

        <div class="centH col-12 sis" style="text"><hr class="sis" /></div>

        <div class="row">
          <div class=" col-12 text-center cent" style="width: 18rem;">
            <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Factural</button>
          </div>
        </div>

        <div class="centH col-12 sis" style="text"><hr color="#237723" class="sis" /></div>

      </div>
    </div>
  </form>

  <?php
  $con=0;
  $proNo=array(0, 0,0,0);
  $valPr=array(0,0,0,0);
  $total=0;
  if(isset($_POST["but"])){
    $nom = $_REQUEST['clien'];
    $valMa= $_POST['vaMax'];
    $proNo[$con]=$_POST['pro'];
    $valPr[$con]=$_POST['val'];
    $con++;
    $proNo[$con]=$_POST['pro1'];
    $valPr[$con]=$_POST['val1'];
    $con++;
    $proNo[$con]=$_POST['pro2'];
    $valPr[$con]=$_POST['val2'];
    $con++;
    $proNo[$con]=$_POST['pro3'];
    $valPr[$con]=$_POST['val3'];
    $con++;
    if($proNo[0]!='' && $valPr[0]!=0){
    foreach($valPr as $nume){
      $total+=$nume;
    }
    if($total<=$valMa)$men="el valor esta bien";
      else $men="el valor supera el maximo";
    
    echo("<div class='coitainer-fluid card'>
            <h3 class='card-header'><center>Factura Merca</center></h3>
            <div class='card-body'>
              
              <div class='row'>
                <div class='card col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom1'>Cliente: ".$nom.
                  "</label>
                </div>
                <div class='card col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val1'>Valor Maximo: ".$valMa.
                  "</label>
                </div>

                <div class=' col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom2'>Producto: ".$proNo[0].
                  "</label>
                </div>
                <div class=' col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val2'>Valor: ".$valPr[0].
                  "</label>
                </div>

                <div class=' col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom2'>Producto: ".$proNo[1].
                  "</label>
                </div>
                <div class=' col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val2'>Valor: ".$valPr[1].
                  "</label>
                </div>

                <div class=' col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom2'>Producto: ".$proNo[2].
                  "</label>
                </div>
                <div class=' col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val2'>Valor: ".$valPr[2].
                  "</label>
                </div>

                <div class=' col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom2'>Producto: ".$proNo[3].
                  "</label>
                </div>
                <div class=' col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val2'>Valor: ".$valPr[3].
                  "</label>
                </div>
              </div>

            </div>
            <h5 class='card-header'><center>Total: ".$total." ".$men."</center></h5>
          </div>");
        }
  }
  ?>
     
</main>

<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>