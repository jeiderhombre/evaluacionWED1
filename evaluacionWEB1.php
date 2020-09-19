<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    .cent{
        margin: 0 auto;
        width: 200px
    }</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaluacionWEB1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    </ul>
  </div>
</nav>

<form action="evaluacionWEB1.php" method="get">
<div class="card ">
  <h5 class="card-header text-center">Ejercisio de Suma</h5>
  <div class="card-body row">
  <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
    <h5 class="card-title">Nombre del Usuario</h5>
    <label form="nombre">Nombre: <input name="nombre" type="text"></label>
    </div>
    <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
    <h5 class="card-title">Primer Numero</h5>
    <label form="numero">Numero: <input name="numero" type="name"></label>
    </div>
    <div class="card col-md-4 col-sm-12 cent" style="width: 18rem;">
        <h5 class="card-title">Segundo Numero</h5>
        <label form="numero1">Numero: <input name="numero1" type="name"></label>
    </div>
    <div class="col-12 text-center" style="width: 18rem;">
    <br>
    <a href="#" name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Operar</a>
    </div>
  </div>
</div>
</form>

</body>
<?php
   
?>
</html>
   

