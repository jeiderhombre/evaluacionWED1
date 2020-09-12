<?php
   $n1='arroz'; $n2='papa';
   $n3='huevos'; $n4='frijoles';
   $n5='pastas'; $n6="leche";
   $n7='sal'; $n8='azucar';
   $n9='cerveza'; $n10='verduras';

   $p1=10000; $p2=15000;
   $p3=12000; $p4=4000;
   $p5=3000; $p6=6000;
   $p7=800; $p8=2000;
   $p9=49000; $p10=25000;

   $total=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;

    echo('valor maximo 80000<br/><br/>Factura de Compra<br/>'.$n1.'= '.$p1.'<br/>'.$n2.'= '.$p2
            .'<br/>'.$n3.'= '.$p3.'<br/>'.$n4.'= '.$p4.
        '<br/>'.$n5.'= '.$p5.'<br/>'.$n6.'= '.$p6.
        '<br/>'.$n7.'= '.$p7.'<br/>'.$n8.'= '.$p8.
        '<br/>'.$n9.'= '.$p9.'<br/>'.$n10.'= '.$p10.
        '<br/><br/><br/>');

   if($total<=80000){
        echo('gracias por su compra');
   }else{
       echo('No le alcanza');
   }
?>