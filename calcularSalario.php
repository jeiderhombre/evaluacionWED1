<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="jeicss.css" type="text/css" media="screen">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
            <span class="navbar-brand disabled" href="#">MENU DE EVALUACION:</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item ">
                <a class="nav-link " href="bodytech.php">BodyTech </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="amor.php">Spring Step</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="areglo.php">Bancolombia</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link disabled" href="#">Calcular Salario<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    </header>
    <main>
    <form action="calcularSalario.php" method="POST">
        <div class="card" style="text-align: center;">
            <h5 class="card-header text-center">Postobón</h5>
            <div class="card-body">

                <div class="row">
                    <div class="card col-md-6 col-sm-12" style="text-align: center;">
                        <label form="nomUs">nombre Usuario:<input name="nomUs" type="text"></label>
                    </div>
                    <div class="card col-md-6 col-sm-12" style="text-align: center;">
                        <label form="horas">Horas Trabajadas:<input name="hor" type="number"></label>
                    </div>
                </div>

                <div class="centH col-12 sis" style="text"><hr class="sis" /></div>

                <div class="row">
                    <div class=" col-12 text-center cent" style="width: 18rem;">
                        <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Factural</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
    </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<?php
if(isset($_POST['but'])){
    $nomUs= $_POST['nomUs'];
    $hor= $_POST['hor'];
    if($nomUs!='' && $hor!=0){
    if($hor<=40) $total= 20000*$hor;
        else{
            $total= 20000*40;
            $hor-=40;
            $total+=25000*$hor;  
        }
    echo("<div class='coitainer-fluid card'>
        <h3 class='card-header'><center>Tu Salario</center></h3>
        <div class='card-body'>

            <div class='row'>
                <div class=' col-6 cent' style='width: 18rem; text-align: right;'>
                  <label from='nom1'>Usuario: ".$nomUs.
                  "</label>
                </div>
                <div class=' col-6 cent' style='width: 18rem; text-align: left;'>
                  <label from='val1'>Salario: ".$total.
                  "</label>
                </div>
            </div> 
        </div>");
    }
}
?>
</html>
<!--
    4.Hacer un programa en PHP para ayudar a un trabajador de
Postobón a saber cuál será su sueldo semanal, se sabe que, si
trabaja 40 horas o menos, se le pagará $20000 por hora, pero
si trabaja más de 40 horas entonces las horas extras se le
pagarán a $25000 por hora.

    -->