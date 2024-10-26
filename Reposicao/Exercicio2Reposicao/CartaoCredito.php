<?php 
namespace PagamentoSistema;
require_once "Pagamento.php";
//  Crie a classe CartaoCredito que implementa a interface Pagamento. O método processarPagamento deve retornar uma mensagem como "Pagamento de R$X via
// Cartão de Crédito processado com sucesso", onde X é o valor recebido.
class CartaoCredito implements Pagamento{
public function processarPagamento($valor){
    return "Pagamento de R$".$valor." via Cartão de Crédito processado com sucesso";
}
}

?>