<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaluacionWEB1</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">suma <span class="sr-only">(current)</span></a>
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

<form action="evaluacionWEB1.php" method="POST">
<div class="card ">
  <h5 class="card-header text-center">Ejercisio de Suma</h5>
  <div class="card-body row">
  <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
    <h5 class="card-title">Nombre del Usuario</h5>
    <label form="nombre">Nombre: <input name="nombre" type="text"></label>
    </div>
    <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
    <h5 class="card-title">Primer Numero</h5>
    <label form="numero">Numero: <input name="numero" type="number"></label>
    </div>
    <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
        <h5 class="card-title">Segundo Numero</h5>
        <label form="numero1">Numero: <input name="numero1" type="number"></label>
    </div>
    <div class="col-12 text-center cent" style="width: 18rem;">
    <br>
    <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Operar</button>
    </div>
  </div>
</div>
</form>

</body>
<?php
     
   if(isset($_POST['but'])){
    $nom =$_POST["nombre"];
    $nu1 =$_POST["numero"];
    $nu2 =$_POST['numero1'];
     if($nom=='' || $nu1==0 || $nu2==0){
        print("faltan datos");
     }else{
      $su =$nu1+ $nu2; $re= $nu1 -$nu2;
      $mu =$nu1* $nu2; $di= $nu1/$nu2;
      print("<div class='text-center cent' style=''>hola $nom, los numeros que ingresastes son $nu1 y $nu2<br/><br/>los resultados de las operaciones son:<br/>Suma=$su<br/>resta=$re<br/>multiplicasion=$mu<br/>divicion=$di.</div>");
    }
   }
   
?>
</html>
   

