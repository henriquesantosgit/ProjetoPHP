<?php 
require "Eletronico.php";
require "Alimento.php";

$smartphone = new Eletronico("Smartphone",1200,1);

$arroz = new Alimento("Arroz",5,10,1);

$tv = new Eletronico("TV",1100,1);
$fone = new Eletronico("Fone de ouvido",120,1);



echo "Smartphone - ".$smartphone->getCategoria()."<br>";

echo "TV -".$tv->getCategoria()."<br>";

echo "Arroz -".$arroz->getCategoria()."<br>";

echo "Fone -".$fone->getCategoria()."<br>";

echo "Total de produtos: ".$smartphone::$totalProdutos;

?>