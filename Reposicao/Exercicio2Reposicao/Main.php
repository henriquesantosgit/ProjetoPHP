<?php 
require "Boleto.php";
require "CartaoCredito.php";
use PagamentoSistema\Boleto;
use PagamentoSistema\CartaoCredito;
$boleto = new Boleto();
$cart = new CartaoCredito();

echo $boleto->processarPagamento(1500)."<br>";
echo $cart->processarPagamento(2000);



?>