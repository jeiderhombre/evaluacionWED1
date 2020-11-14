<?php
    include("BaseDatos.php");

    if(isset($_POST['botonEnvio'])){
        $nombre=$_POST['nombre'];
        $apell=$_POST['apellido'];
        $descri=$_POST['descripcion'];
        $genero=$_POST['genero'];

        print_r($_POST);
        echo"<br>";
        $consion= new BaseDatos();

        $consultasql="INSERT INTO usuarios(nombre, apellido, descripcion, genero) VALUES ('$nombre','$apell','$descri','$genero')";

        $consion->agregarDatos($consultasql);
    }
?>