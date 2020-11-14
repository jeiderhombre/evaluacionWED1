<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="jeicss.css" type="text/css" media="screen">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
                <span class="navbar-brand disabled" href="#">MENU DE EVALUACION:</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item ">
                    <a class="nav-link " href="areglo.php">Bancolombia </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calcularSalario.php">Calcular Salario</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="#">Erika <span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form action="erika.php" method="POST">
            <div class="card conten-fluid" style="text-align: center">
                <h5 class="card-header">Calcula ganacia</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
                            <h5 class="card-title">referencia producto</h5>
                            <label form="nombre">Nombre: <input name="nombre" type="text" require></label>
                        </div>
                        <div class="card col-md-6 col-sm-12 cent" style="width: 18rem;">
                            <h5 class="card-title">valor producto</h5>
                            <label form="telefono">valor: <input name="telfo" type="number" require></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-4 col-sm-12 text-center cent" style="width: 18rem;">
                            <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Añadir</button>
                        </div>
                        <div class=" col-md-4 col-sm-12 text-center cent" style="width: 18rem;">
                            <button name="but1" class="btn btn-primary width-30" type="submit" style="width:30%">Ver</button>
                        </div>
                        <div class=" col-md-4 col-sm-12 text-center cent" style="width: 18rem;">
                            <button name="but2" class="btn btn-primary width-30" type="submit" style="width:30%">Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $con;
                if(isset($_POST["but"])){
                    if(empty($con)==true) $con=0;
                    $conte = mysql_connect('localhost', 'root', '');
                    if(!$conte){
                        echo("error de conecion");
                    }else{
                        $base=mysql_select_db('prueba');
                        if(!$base) echo('no se encontro data base');
                    } 
                }
            ?>
        </form>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>