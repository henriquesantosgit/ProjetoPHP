<?php 
require "Produto.php"; 

class Eletronico extends Produto{
    public function __construct($nm,$pr,$qt){
        parent::__construct($nm,$pr,$qt);
        return self::$totalProdutos+=1;
    }
    public function getCategoria(){
        return "Eletrônicos";
    }
  

}



?>