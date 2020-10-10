<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BodyTech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="jeicss.css" type="text/css" media="screen">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <span class="navbar-brand disabled" href="#">MENU DE EVALUACION:</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="evaluacionWEB1.php">suma</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">BodyTech <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
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

<form action="bodytech.php" method="POST">
  <div class="card ">
    <h5 class="card-header text-center">BodyTech</h5>
    <div class="card-body row">

      <div class="card col-12 text-center cent" style="width: 18rem; text-align: center;">
        <p id="inf">Bienvenido a BodyTech, vamos a ver si estas en condiciones para nuestro exigente jornada de entrenamiento</p>
      </div>
  
      <div class="card col-md-6 col-sm-12 cent" style="width: 18rem; text-align: center;">
        <h5 class="card-title">Peso del Usuario</h5>
        <label form="peso">Peso: <input name="pes" type="number"></label>
      </div>
  
      <div class="card col-md-6 col-sm-12 cent" style="width: 18rem; text-align: center;">
        <h5 class="card-title">Altura del Usuario</h5>
        <label form="altura">Altura: <input name="alt" type="number"></label>
      </div>

      <div class="col-12 text-center cent" style="width: 18rem;">
        <br>
        <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Sumar</button>
      </div>
    </div>
  </div>
</form>

<!--
function FigureBMImet(form, cm, kg) {
                    Meters = eval(cm)/100;
                    Kilos = eval(kg);
                    Square = Meters * Meters;
                    form.calcval.value = Math.round(Kilos * 10 / Square) / 10;-->
    <?php
      if(isset($_POST["but"])){
        $pes =$_POST["pes"];
        $alt =$_POST["alt"];
        if($pes!=0 && $alt!=0){
        $alt/=100;
        $masa = $alt*$alt;
        $masa = (($pes*10)/$masa)/10;
        echo("<div style='text-align: center;'>
        <label >".round($masa, 2)."</label><br/><br/>");
        if($masa < 18.5){
          print("peso insuficiente");
        }else if($masa<=24.9){
          echo("peso normal");
        }else if($masa<=26.9){
          echo("sobre peso grado 1");
        }else if($masa <=29.9){
          print("sobre peso grado 2 (preobesidad)");
        }else if($masa<=34.9){
          echo("obesidad tipo 1");
        }else if($masa<=39.9){
          print("obesida tipo 2");
        }else if($masa<=49.9){
          print("obesida tipo 3(morvida)");
        }else if($masa>=50){
          echo("obesidad tipo 4(extrema)</div>");
        }
      }
      }
    ?>
</body>

</html>