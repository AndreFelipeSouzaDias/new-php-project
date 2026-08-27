<?php

function imprimedados($nome, $habitantes, $area, $altitude, $estado) {
 echo $nome . "|";
 echo $habitantes . "|";
 echo $area . "km²|";
 echo $altitude . "m|";
 echo $estado . "\n";
} 

imprimedados("foz do iguaçu" ,250000 ,500 ,145 ,"Paraná-PR");
imprimedados("cascavel" ,300000 ,420 ,320 ,"Paraná-PR");
imprimedados("chapeco" ,240000 ,120 ,620 ,"Santa catarina-SC");
imprimedados("blumenau" ,330000 ,200 ,85 ,"Santa catarina-SC");
imprimedados("curitiba" ,1500000 ,300 ,850 ,"Paraná-PR");
