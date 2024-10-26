<?php 
require "Produto.php"; 

class Eletronico extends Produto{
    public function __construct($nm,$pr,$qt){
        parent::__construct($nm,$pr,$qt);
    }
    public function getCategoria(){
        return "Eletrônicos";
    }
    public function getTotal(){
        return self::$totalProdutos+=1;
    }

}



?>