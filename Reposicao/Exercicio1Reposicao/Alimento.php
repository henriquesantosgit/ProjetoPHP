<?php 
require_once "Produto.php";   
// Usa require_once para evitar múltiplas inclusões,pois como fiz em arquivos separados,quando chamo ele no main
//dá erro pois chama o Produto php duas vezes

class Alimento extends Produto{
    public function __construct($nm,$pr,$qt){
        parent::__construct($nm,$pr,$qt);
        return self::$totalProdutos+=1;
    }
    public function getCategoria(){
        return "Alimento";
    }
   
    

}



?>