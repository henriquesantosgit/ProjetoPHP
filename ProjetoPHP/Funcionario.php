<?php 
require 'conexao.php';
class  Funcionario{
    protected $codigo;
    protected $nome;
    protected $salario;

    protected $cargo;
    protected $horasT;
    public function __construct($cd, $nm, $sl,$cg,$hr) {
        $this->codigo = $cd;
        $this->nome = $nm;
        $this->salario = $sl;
        $this->cargo = $cg;
        $this->horasT = $hr;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function getCargo() {
        return $this->cargo;
    }
    public function getHorasT() {
        return $this->horasT;
    }

    public function calcularSalario(){
        return $this->salario*$this->horasT;

}
// public function apresentar() {
//     echo "Código: ".$this->codigo."<br>";
//     echo "Nome: ". $this->nome. " ";
//     echo "de  ". $this->cargo. " anos";
// }
}


?>