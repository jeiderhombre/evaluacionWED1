  
<?php 

//Arreglos de una dimension
$precios=array("precio1"=>1600,"precio2"=>5000,"precio3"=>2500);
$nombres=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");

//arreglos en multiples dimensiones
$productos=array(
    "producto1"=>array("nombre"=>"arroz","precio"=>1600,"marca"=>"diana"),
    "producto2"=>array("nombre"=>"salchicha","precio"=>5000,"marca"=>"zenu"),
    "producto3"=>array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca")
);

print_r($productos);


?>