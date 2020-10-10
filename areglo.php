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
    <form action="areglo.php" method="POST">
        <div class="card">
            <h5 class="card-header text-center">Bancolombia sucursal A</h5>
            <div class="card-body">

            <div class="row">
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Nombre del Usuario</h5>
                    <label form="nombre">Nombre: <input name="nombre" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Telefono del Usuario</h5>
                    <label form="telefono">Telefono: <input name="telfo" type="number" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Direcion del Usuario</h5>
                    <label form="direcion">Direcion: <input name="dir" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Salario del Usuario</h5>
                    <label form="salario">Salario: <input name="salar" type="number" require></label>
                </div>
            </div>
            
            <div class="row">
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Nombre del Usuario</h5>
                    <label form="nombre1">Nombre: <input name="nombre1" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Telefono del Usuario</h5>
                    <label form="telefono1">Telefono: <input name="telfo1" type="number" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Direcion del Usuario</h5>
                    <label form="direcion1">Direcion: <input name="dir1" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Salario del Usuario</h5>
                    <label form="salario1">Salario: <input name="salar1" type="number" require></label>
                </div>
            </div>

            <div class="row">
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Nombre del Usuario</h5>
                    <label form="nombre2">Nombre: <input name="nombre2" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Telefono del Usuario</h5>
                    <label form="telefono2">Telefono: <input name="telfo2" type="number" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Direcion del Usuario</h5>
                    <label form="direcion2">Direcion: <input name="dir2" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Salario del Usuario</h5>
                    <label form="salario2">Salario: <input name="salar2" type="number" require></label>
                </div>
            </div>

            <div class="row">
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Nombre del Usuario</h5>
                    <label form="nombre3">Nombre: <input name="nombre3" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Telefono del Usuario</h5>
                    <label form="telefono3">Telefono: <input name="telfo3" type="number" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Direcion del Usuario</h5>
                    <label form="direcion3">Direcion: <input name="dir3" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Salario del Usuario</h5>
                    <label form="salario3">Salario: <input name="salar3" type="number" require></label>
                </div>
            </div>

            <div class="row">
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Nombre del Usuario</h5>
                    <label form="nombre4">Nombre: <input name="nombre4" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Telefono del Usuario</h5>
                    <label form="telefono4">Telefono: <input name="telfo4" type="number" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Direcion del Usuario</h5>
                    <label form="direcio4n">Direcion: <input name="dir4" type="text" require></label>
                </div>
                <div class="card col-lg-3 col-md-6 col-sm-12 cent" style="width: 18rem;">
                    <h5 class="card-title">Salario del Usuario</h5>
                    <label form="salario4">Salario: <input name="salar4" type="number" require></label>
                </div>
            </div>
            
            <div class="centH col-12 sis" style="text"><hr class="sis" /></div>

            <div class="row">
                <div class=" col-md-6 col-sm-12 text-center cent" style="width: 18rem;">
                    <button name="but" class="btn btn-primary width-30" type="submit" style="width:30%">Comparar</button>
                </div>
                <div class=" col-md-6 col-sm-12 text-center cent" style="width: 18rem;">
                    <button name="but1" class="btn btn-primary width-30" type="submit" style="width:30%">Borrar</button>
                </div>
            </div>

            </div>
        </div>
    </form>
    </main>
    <?php
        $res;
        if( empty($res)==true) $res=0;
         
        $nombre=array('','','','','');
        $telefono=array('','','','','');
        $dir=array('','','','','');
        $salar=array('','','','','');
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

<?php
if(isset($_POST["but"])){
    if(empty($_POST['nombre'])==true){
        print("<div class='coitainer-fluid card'>
        <h5 class='card-header'><center>ingresa datos</center></h5></div>");
    }else{
            $nombre[$res]=$_POST['nombre'];
            $telefono[$res]=$_POST['telfo'];
            $dir[$res]=$_POST['dir'];
            $salar[$res]=$_POST['salar'];
            $res++;
            $nombre[$res]=$_POST['nombre1'];
            $telefono[$res]=$_POST['telfo1'];
            $dir[$res]=$_POST['dir1'];
            $salar[$res]=$_POST['salar1'];
            $res++;
            $nombre[$res]=$_POST['nombre2'];
            $telefono[$res]=$_POST['telfo2'];
            $dir[$res]=$_POST['dir2'];
            $salar[$res]=$_POST['salar2'];
            $res++;
            $nombre[$res]=$_POST['nombre3'];
            $telefono[$res]=$_POST['telfo3'];
            $dir[$res]=$_POST['dir3'];
            $salar[$res]=$_POST['salar3'];
            $res++;
            $nombre[$res]=$_POST['nombre4'];
            $telefono[$res]=$_POST['telfo4'];
            $dir[$res]=$_POST['dir4'];
            $salar[$res]=$_POST['salar4'];
            $res++; 
    }
    $sumatoriaSalarios=0;
    foreach($salar as $val2){
        $sumatoriaSalarios+=$val2;
    }
        $saA="Salario Sucursal A: ".$sumatoriaSalarios;
        $b=40000000;
        $saB="Salario Sucursal B: ".$b;
        $c=32000000;
        $saC="Salario Sucursal C: ".$c;
        $salida;
        if($sumatoriaSalarios>$b && $sumatoriaSalarios>$c)
            $salida=$saA;
        elseif($b>$c)
            $salida=$saB;
        else
            $salida=$saC;

    print("<div class='coitainer-fluid card'>
            <h3 class='card-header'><center>Informacion Trabajadores</center></h3>
            <div class='card-body'>");
                if(empty($nombre)!=true){
                    for($con=0; $con<5; $con++){ 
                    echo("<div class='row'>
                        <div class='card col-md-3 col-sm-6 cent' style='width: 18rem; text-align: center;'>
                            <label from='nom1'>Usuario: ".$nombre[$con]."
                            </label>
                        </div>
                        <div class='card col-md-3 col-sm-6 cent' style='width: 18rem; text-align: center;'>
                            <label from='val1'>Telefono: ".$telefono[$con]."
                            </label>
                        </div>
                        <div class='card col-md-3 col-sm-6 cent' style='width: 18rem; text-align: center;'>
                            <label from='val1'>Direcion: ".$dir[$con]."
                            </label>
                        </div>
                        <div class='card col-md-3 col-sm-6 cent' style='width: 18rem; text-align: center;'>
                            <label from='val1'>Salario: ".$salar[$con]."
                            </label>
                        </div>
                    </div>");
                    }
                    echo("<div class='row'>
                            <div class='card col-12 cent' style='width: 18rem; text-align: center;'>
                                <label from='val1'>Salario total: ".$sumatoriaSalarios."
                                </label>
                            </div>
                        </div>
                    
                    <div class='centH col-12 sis' style='text'><hr class='sis' /></div>
                    
                    <h5 class='card-header'><center>Comparando</center></h5>
                    <div class='row'>
                        <div class='card col-4 cent' style='width: 18rem; text-align: center;'>
                             <label from='val1'>A: ".$sumatoriaSalarios."
                            </label>
                        </div>
                        <div class='card col-4 cent' style='width: 18rem; text-align: center;'>
                             <label from='val1'>B: ".$b."
                            </label>
                        </div>
                        <div class='card col-4 cent' style='width: 18rem; text-align: center;'>
                             <label from='val1'>C: ".$c."
                            </label>
                        </div>
                    </div>
                    <div class='centH col-12 sis' style='text'><hr class='sis' /></div>
                    <h5 class='card-header'><center>el mejor salario es:<br>$salida</center></h5>");
                }else echo("no hay daros para ver");
echo("</div>
</div>");
}
if(isset($_POST["but1"])){
    $res=0;
    $nombre=array('','','','','');
    $telefono=array('','','','','');
    $dir=array('','','','','');
    $salar=array('','','','','');
}

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