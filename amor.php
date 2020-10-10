<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
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
      <li class="nav-item ">
        <a class="nav-link " href="index.php">Inicio </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="evaluacionWEB1.php">suma</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bodytech.php">BodyTech</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Spring Step<span class="sr-only">(current)</span></a>
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
  <form action="amor.php" method="POST">
    <div class="card">
      <h5 class="card-header text-center">Spring Step</h5>
      <div class="card-body">

        <div class="row">
          <div class="card col-12 cent">
            <h5 class="card-text text-center">Gran promoción de zapatos</h5><p class="card-text">-compra 3 pares y opten el 10% de descuento<br/>-compra 4 a 8 pares y opten el 20% de descuento<br/>-compra 9 en adelante, opten el 50% de descuento </p>
          </div>
        </div>

        <div class="row">
          <div class="card col-md-6 col-sm-12">
            <label for="zapatos">Zapatos:</label>
            <select name="zapa" class="form-control width-30" style="width: 18rem;" >
              <option>seleciona</option>
              <option value="hombres">zapatos hombres</option>
              <option value="dama">zapatos dama</option>
              <option value="deportivos">zapatos deportivos</option>
              <option value="variados">zapatos variados</option>
            </select>
          </div>
          <div class="card col-md-6 col-sm-12">
            <label form="cantidad">ingrese la cantidad:</label>
            <input name="cant" type="number" style="width: 18rem;">
          </div>
          
        </div>

        <div class="centH col-12 sis" style="text"><hr class="sis" /></div>

        <div class="row">
          <div class=" col-12 text-center cent" style="width: 18rem;">
            <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Cotisar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php
  if(isset($_POST["but"])){
    $zapa = $_POST['zapa'];
    $cint = $_POST['cant'];
    $valor; 
    $total;

    switch($zapa){
      case 'hombres': $valor=95000;
      break; case 'dama':  $valor=99000;
      break;  case 'deportivos': $valor=150000;
      break; case 'variados': $valor=100000;
      break;  
    }
    if($cint>0 && $cint<=2){
      $total=$valor*$cint;
    }else if($cint==3){
      $total=$valor*$cint;
      $total-=$total/100*10;
    }else if($cint>3 && $cint<=8){
      $total=$valor*$cint;
      $total-=$total/100*20;
    }else{
      $total=$valor*$cint;
      $total-=$total/100*50;
    }
    echo("<div class='coitainer-fluid card'>
            <h3 class='card-header'><center>Cotizcion</center></h3>
            <div class='card-body'>
              
              <div class='row'>
                <div class='card col-md-3 col-sm-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom1'>zapatos: ".$zapa.
                  "</label>
                </div>
                <div class='card col-md-3 col-sm-6  cent' style='width: 18rem; text-align: right;'>
                  <label from='nom1'>Valor: ".$valor.
                  "</label>
                </div>
                <div class='card col-md-3 col-sm-6  cent' style='width: 18rem; text-align: left;'>
                  <label from='val1'>Cantida: ".$cint.
                  "</label>
                </div>
                <div class='card col-md-3 col-sm-6  cent' style='width: 18rem; text-align: left;'>
                  <label from='val1'>Total: ".$total.
                  "</label>
                </div>
              </div>
            </div>
          </div>");
  }
?>
</main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<!--
  3.Codificar un programa en PHP para la tienda Spring Step que
tiene una promoción de descuento, esta dependerá del número de
zapatos que se compren.

 Si son 3 pares se les dará un 10% de descuento al cliente
sobre el total de la compra;

 Si el número de zapatos es mayor 3 pares, pero menor o
igual de 8 pares, se le otorga un 20% de descuento

 si son más 8 pares de zapatos se otorgará un 50% de
descuento. Defina la cantidad de variables que necesite,
el costo de cada par de zapatos y establezca el valor
total de la compra de zapatos.
-->