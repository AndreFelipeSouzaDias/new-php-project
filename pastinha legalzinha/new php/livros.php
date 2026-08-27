<?php

class livro {
    private $titulo;
    private $autor;
    private $genero;
    private $qtdPaginas;
    private $valorPago;

    public function __toString() {
        return "Título: " . $this->titulo . "\n" .
               "Autor: " . $this->autor . "\n" .
               "Gênero: " . $this->genero . "\n" .
               "Quantidade de Páginas: " . $this->qtdPaginas . "\n" .
               "Valor Pago: R$ " . number_format($this->valorPago, 2, ',', '.') . "\n";
    }
   
      
    
    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qtdPaginas
     */
    public function getQtdPaginas()
    {
        return $this->qtdPaginas;
    }

    /**
     * Set the value of qtdPaginas
     */
    public function setQtdPaginas($qtdPaginas): self
    {
        $this->qtdPaginas = $qtdPaginas;

        return $this;
    }

    /**
     * Get the value of valorPago
     */
    public function getValorPago()
    {
        return $this->valorPago;
    }

    /**
     * Set the value of valorPago
     */
    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

$opcao = 0;

do{
    echo "1. Cadastrar livro\n";
    echo "2. Listar livros\n";
    echo "3. Buscar livro por título\n";
    echo "4. total gasto com livros\n";
    echo "0. Sair\n";
    $opcao = readline("escolha uma opção: ");

    switch($opcao){
        case 1:
            $livro = new livro();
            $livro->setTitulo(readline("Digite o título do livro: "));
            $livro->setAutor(readline("Digite o autor do livro: "));
            $livro->setGenero(readline("Digite o gênero do livro: "));
            $livro->setQtdPaginas(readline("Digite a quantidade de páginas do livro: "));
            $livro->setValorPago(readline("Digite o valor pago pelo livro: "));

            $livros[] = $livro;
            echo "livro adicionado com sucesso!\n";
            break;

        case 2:
            foreach($livros as $l){
                echo $l;
            }
            break;

        case 3:
            
            $tituloBusca = readline("Digite o ID do livro que deseja buscar: ");
            
            break;

        case 4:
            $totalGasto = 0;
            foreach($livros as $l){
                $totalGasto += $l->getValorPago();
            }

            echo "Total gasto com livros:" . $totalGasto . "\n";
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }

}while($opcao != 0);