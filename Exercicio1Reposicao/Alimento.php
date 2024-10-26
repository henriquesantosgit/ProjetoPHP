<?php 
require_once "Produto.php";   
// Usa require_once para evitar múltiplas inclusões,pois como fiz em arquivos separados,quando chamo ele no main
//dá erro pois chama o Produto php duas vezes

class Alimento extends Produto{
    public function getCategoria(){
        return "Alimento";
    }
    public function getTotal(){
        return self::$totalProdutos+=1;
    }
    

}



?>