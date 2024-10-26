<?php 
namespace PagamentoSistema;
require_once "Pagamento.php";
// b. Crie a classe Boleto que também implementa a interface Pagamento. O método
// processarPagamento deve retornar uma mensagem como "Pagamento de R$X via
// Boleto processado com sucesso".

class Boleto implements Pagamento{
public function processarPagamento($valor){
    return "Pagamento de R$".$valor." via Boleto processado com sucesso";
}
}

?>