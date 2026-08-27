<?php

require_once('modelo/Estado.php');
require_once('modelo/Cidade.php');

$Estado0 = new Estado();
$Estado0->setNome("Santa Catarina");
$Estado0->setSigla("SC");

$Cidade0 = new Cidade();
$Cidade0->setNome("Florianopolis");
$Cidade0->setQtdHacbitantes("103000");
$Cidade0->setAltitude("230");
$Cidade0->setEstado($Estado0);
$Cidade[] = $Cidade0;

$Cidade1 = new Cidade();
$Cidade1->setNome("Blumenau");
$Cidade1->setQtdHacbitantes("9000000");
$Cidade1->setAltitude("432");
$Cidade1->setEstado($Estado0);
$Cidade[] = $Cidade1;

$Estado1 = new Estado();
$Estado1->setNome("Paraná");
$Estado1->setSigla("PR");

$Cidade2 = new Cidade();
$Cidade2->setNome("Foz do iguaçu");
$Cidade2->setQtdHacbitantes("100000");
$Cidade2->setAltitude("100");
$Cidade2->setEstado($Estado1);
$Cidade[] = $Cidade2;

$Cidade3 = new Cidade();
$Cidade3->setNome("Cascavel");
$Cidade3->setQtdHacbitantes("50000");
$Cidade3->setAltitude("50");
$Cidade3->setEstado($Estado1);
$Cidade[] = $Cidade3;

if(count($Cidade) > 0) {
  echo "\nCidades:\n";
  foreach($Cidade as $c) {
    echo "\nNome: " . $c->getNome();
    echo "\nQuantidade de Habitantes: " . $c->getQtdHacbitantes();
    echo "\nAltitude: " . $c->getAltitude();
    echo "\nEstado: " . $c->getEstado()->getNome();
    echo "\nSigla: " . $c->getEstado()->getSigla();
  }
}