<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bancolombia</title>
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
            <li class="nav-item active">
                <a class="nav-link disabled" href="#">Bancolombia <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    </header>
    <main>

    </main>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

<?php
$productos=array(10);
$valorPro=array("p1"=>1, "p2"=>2, "p3"=>3, "p4"=>1, "p5"=>2, "p6"=>3, "p7"=>1, "p8"=>2, "p9"=>3, "p10"=>4);
?>
<!--
5.Bancolombia contrata sus servicios de desarrollador para
realizar un programa en PHP que permita:

 Almacenar en variables información de nombre, teléfono
dirección y salario de 5 usuarios de una sucursal llamada
sucursal A.

 Sumar todos los salarios de los usuarios de la sucursal A
en una sola variable llamada $sumatoriaSalarios y así
poder comparar dicho valor con las sucursales B cuyo valor
de salarios mensuales es de 40.000.000 y la sucursal C
cuyo valor de salarios mensuales es de 32.000.000.
Permita que su código muestre cual sucursal tiene la mejor
sumatoria de salarios y además muestre en pantalla la
información completa de los 5 usuarios de la sucursal A

-->