<?php
    include("BaseDatos.php");

    if(isset($_POST['botonEnvio'])){
        $nombre=$_POST['nombre'];
        $apell=$_POST['apellido'];
        $descri=$_POST['descripcion'];
        $genero=$_POST['genero'];
        $foto=$_POST['foto'];

        print_r($_POST);
        echo"<br>";
        $consion= new BaseDatos();

        $consultasql="INSERT INTO usuarios(nombre, apellido, descripcion, genero, foto) VALUES ('$nombre','$apell','$descri','$genero', '$foto')";

        $consion->agregarDatos($consultasql);
        header("location:listaUsuario.php");
    }
?>