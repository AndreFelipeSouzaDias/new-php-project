<?php

require_once 'modelos/Pedido.php';
require_once 'modelos/Prato.php';

$pratos = [];
$pedidos = [];

$pratos[] = new Prato("Camarão à Milanesa", 110.00, 1);
$pratos[] = new Prato("Pizza Margherita", 80.00, 2);
$pratos[] = new Prato("Macarrão à Carbonara", 60.00, 3);
$pratos[] = new Prato("Bife à Parmegiana", 75.00, 4);
$pratos[] = new Prato("Risoto ao funghi", 70.00, 5);

do {
    echo "1-Cadastrar\n";
    echo "2-Cancelar\n";
    echo "3-Listar\n";
    echo "4-Total de vendas\n";
    echo "0-Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $nomeCliente = readline("Digite o nome do cliente: ");
            $nomeGarcom = readline("Digite o nome do garçom: ");

            echo "Pratos disponíveis:\n";
            foreach ($pratos as $prato) {
                echo $prato->getNumero() . " - " . $prato->getNome() . " - R$ " . $prato->getPreco() . "\n";
            }

            $numeroPrato = readline("Escolha um prato: ");
            
            foreach ($pratos as $prato) {
                if ($prato->getNumero() == $numeroPrato) {
                    $pedido = new Pedido($nomeCliente, $nomeGarcom, $prato);
                    $pedidos[] = $pedido;
                    echo "Pedido cadastrado com sucesso!\n";
                }
            }
            break;
        case 2:
            $delete = readline("Digite o número do pedido para cancelar o pedido: ");
            if (isset($pedidos[$delete])) {
                array_splice($pedidos, $delete, 1);
                echo "Pedido cancelado com sucesso!\n";
            } else {
                echo "Pedido não encontrado!\n";
            }
            break;

        case 3:
            foreach($pedidos as $p){
                    echo $p;
            }
            break;

        case 4:
            $totalVendas = 0;
            foreach ($pedidos as $p) {
                $totalVendas += $p->getPrato()->getPreco();
            }

            echo "Total de vendas: R$: " . $totalVendas . "\n";
            break;

        case 0:
            echo "Tchau mlk\n";
            break;

        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 0);