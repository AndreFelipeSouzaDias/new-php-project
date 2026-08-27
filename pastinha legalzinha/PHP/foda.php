<?php


class Carta {
	private $numero;
 	private $nome;
 	private $dica;

 	public function __construct($numero = 0, $nome = '', $dica = '') {
 		$this->numero = $numero; 
 		$this->nome = $nome;    
 		$this->dica = $dica;     
 	}

 	public function getNumero() {
 		return $this->numero; 
 	}

 	public function setNumero($n): self {
 		$this->numero = $n;   
 		return $this;
 	}

 	public function getNome() {
 		return $this->nome;  
 	}

 	public function setNome($nome): self {
 		$this->nome = $nome;  
 		return $this;
 	}

 	public function getDica() {
 		return $this->dica;  
 	}

 	public function setDica($dica): self {
 		$this->dica = $dica;  
 		return $this;
 	}

 	public function __toString() {
 		$parteDica = $this->dica !== '' ? " | Dica: " . $this->dica : "";
 		return sprintf("Nome: %s | Número: %d%s", $this->nome, $this->numero, $parteDica);
 	}
}

// Função de leitura de texto do usuário no terminal.
// Usa readline() quando disponível ou fgets(STDIN) como fallback.
function prompt($texto = '') {
 	if (function_exists('readline')) {
 		$entrada = readline($texto);
 	} else {
 		echo $texto;
 		$entrada = fgets(STDIN);
 	}
 	return trim((string)$entrada);
}

$baralho = [];
$baralho[] = new Carta(1, 'Ás de Espadas', 'Muito simbólica e marcante.');
$baralho[] = new Carta(2, 'Rei de Copas', 'Um rei com coração.');
$baralho[] = new Carta(3, 'Dama de Ouros', 'Ligada a prosperidade.');
$baralho[] = new Carta(4, 'Valete de Paus', 'Jovem corajoso com bastão.');
$baralho[] = new Carta(5, 'Sete de Copas', 'Sonhos e escolhas.');
$baralho[] = new Carta(6, 'Nove de Espadas', 'Cuidado, pode indicar preocupação.');
$baralho[] = new Carta(7, 'Seis de Ouros', 'Generosidade e equilíbrio.');
$baralho[] = new Carta(8, 'Quatro de Paus', 'Celebração e estabilidade.');
$baralho[] = new Carta(9, 'Cinco de Copas', 'Perda e arrependimento.');
$baralho[] = new Carta(10, 'Três de Espadas', 'Coração partido e tristeza.');
$baralho[] = new Carta(11, 'Dois de Ouros', 'Equilíbrio e adaptação.');
$baralho[] = new Carta(12, 'Ás de Copas', 'Novo começo emocional.');
$baralho[] = new Carta(13, 'Rei de Espadas', 'Autoridade e intelecto.');
$baralho[] = new Carta(14, 'Dama de Paus', 'Criatividade e paixão.');
$baralho[] = new Carta(15, 'Valete de Copas', 'Jovem romântico e sensível.');

$cartaSorteada = $baralho[array_rand($baralho)];

echo "\n=== Jogo da Adivinhação de Cartas ===\n";
echo "Vou escolher uma carta do baralho. Veja as cartas disponíveis e tente adivinhar.\n\n";

echo "Cartas no baralho:\n";
foreach ($baralho as $idx => $c) {
 	// Mostra apenas o nome de cada carta para o jogador.
 	echo sprintf("%d) %s\n", $idx + 1, $c->getNome());
}

echo "\nRegra: faça o palpite informando o \"número\" da carta .\n";
echo "Digite 'dica' para ver a dica ou 'desistir' para encerrar.\n\n";

// Variáveis de controle do jogo.
$tentativas = 0;
$score = 100;
$dicaUsada = false;

while (true) {
 	// Lê o palpite do jogador.
 	$entrada = prompt('Seu palpite: ');
 	if ($entrada === '') {
 		echo "Entrada vazia. digite um número, 'dica' ou 'desistir'.\n";
 		continue;
 	}

 	$lower = strtolower($entrada);
 	if ($lower === 'desistir' || $lower === 'sair') {
		// Se o jogador desistir, mostra a carta sorteada e encerra.
 		echo "\nVocê desistiu. A carta sorteada foi: " . $cartaSorteada->getNome() . " (número: " . $cartaSorteada->getNumero() . ")\n";
 		break;
 	}

 	if ($lower === 'dica') {
 		// Se o jogador pedir dica, mostra e reduz a pontuação.
 		if (!$dicaUsada) {
 			echo "\nDica: " . $cartaSorteada->getDica() . "\n";
 			$score = max(0, $score - 20);
 			$dicaUsada = true;
 			continue;
 		} else {
 			echo "Você já usou a dica.\n";
 			continue;
 		}
 	}

 	if (!is_numeric($entrada)) {
 		// Se não for número e nenhum comando conhecido, pede novamente.
 		echo "Por favor informe um número válido.\n";
 		continue;
 	}

 	$tentativas++;
 	$palpite = intval($entrada);

 	if ($palpite === $cartaSorteada->getNumero()) {
 		// Mostra a carta e a pontuação final.
 		echo "\nVocê acertou a carta sorteada.\n";
 		echo "Carta: " . $cartaSorteada->getNome() . " (número: " . $cartaSorteada->getNumero() . ")\n";
 		$score = max(0, $score - ($tentativas - 1) * 10);
 		echo sprintf("Tentativas: %d | Pontuação: %d\n", $tentativas, $score);
 		break;
 	} else {
 		// Informa e permite nova tentativa.
 		echo "Não é essa, tente novamente.\n";
 	}
}

echo "\nbom, era so isso mesmo, tchau.\n";

?>
