<?php

class Funcionario
{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus()
    {
        return $this->salario * 0.10;
    }

    public function exibirDados()
    {
        echo "Nome: {$this->nome}<br>";
        echo "Salário: {$this->salario}<br>";
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.15;
    }
}

$gerente = new Gerente("João", 10000);
$dev = new Desenvolvedor("Maria", 8000);

echo "<h3>Gerente</h3>";
$gerente->exibirDados();
echo "Bônus: " . $gerente->calcularBonus();

echo "<hr>";

echo "<h3>Desenvolvedor</h3>";
$dev->exibirDados();
echo "Bônus: " . $dev->calcularBonus();

?>