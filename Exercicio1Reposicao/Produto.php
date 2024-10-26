<?php 
abstract class Produto{
    public $nome;
    public $preco;
    public $qtd;
    public static $totalProdutos = 0;
    public function __construct($nome,$preco,$qtd){
        $this->$nome = $nome;
        $this->$preco = $preco;
        $this->$qtd=$qtd;
    }
    abstract public function getCategoria();


}

?>