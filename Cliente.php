<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    Class Cliente extends Pessoa{
        protected float $totalDeCompras;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, string $totalDeCompras)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->totalDeCompras = $totalDeCompras;
        }//Fim do contrutor

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>Total: ".$this->totalDeCompras; 
        }//Fim do método
    
    
    
    }//Fim da classe

?>