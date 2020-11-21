<?php
include('BaseDatos.php');
$editar=new BaseDatos();

if(isset($_POST['botonEnvio']))
    $nombre=$_POST['nombreEditar'];
    $descrip=$_POST['descripcionEditar'];

    $id=$_GET[''];
    
    $cosultarSQL="UPDATE usuarios SET nombre='$nombre', descripcion='$descrip' WHERE ID_usuario='$id'";

    $editar->editarDatos($cosultarSQL);
    header("location:listaUsuario.php");
?>