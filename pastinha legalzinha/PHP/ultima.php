<?php   

for ($i=0; $i <= 5 ; $i++) { 

$nome = readline("qual é seu nome: \n");

$peso = readline("qual é seu peso (em quilos): \n");

$altura = readline("qual sua altura (em metros): \n");

$imc = $peso / ($altura * $altura);

echo ($nome . " tem peso " . $peso . " e tem " . $altura . " de altura com " . $imc . " de IMC. \n");

}