<?php

class Monitor{

public $polegadas;
public $resolução;
public $marca;
public $cor;
public $voltagem;

 function ligar(){
    echo "monitor ligado\n";

 }

 function desligar(){
    echo "monitor desligado\n";


 }

 function exibirimagem(){
    echo "monitor exibindo imagem\n";

 }



}

$monitor1 = new Monitor();
$monitor1 -> polegadas = 23;
$monitor1 -> resolução = "1920x1080";
$monitor1 -> marca = "AOC";
$monitor1 -> cor = "preto";
$monitor1 -> voltagem = 220;
$monitor1 -> ligar();
$monitor1 -> exibirimagem();
$monitor1 -> desligar();
printf("monitor1\n polegadas: %d | marca: %s\n", $monitor1 -> polegadas, $monitor1 -> marca);

$monitor2 = new Monitor();
$monitor2 -> polegadas = 20;
$monitor2 -> resolução = "1600x1200";
$monitor2 -> marca = "CCE";
$monitor2 -> cor = "preto";
$monitor2 -> voltagem = 220;
$monitor2 -> ligar();
$monitor2 -> exibirimagem();
$monitor2 -> desligar();
printf("Monitor2\n polegadas: %d | marca: %s\n", $monitor2 -> polegadas, $monitor2 -> marca);