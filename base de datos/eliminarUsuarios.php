<?php
include( "BaseDatos.php");

$eliminar= new BaseDatos();

$id=$_GET["id"];
echo($id);

$consultaSql = "DELETE FROM usuarios WHERE ID_usuario='$id' ";

$eliminar->eliminarDatos($consultaSql);
header("location:listaUsuario.php");
?>