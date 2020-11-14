<?php
include( "BaseDatos.php");

$eliminar= new BaseDatos();

$id=$_GET["id"];
echo($id);

$consultaSql = "DELETE FROM usuarios WHERE '$id' "

$eliminar->eliminarDatos($consultaSql);
?>