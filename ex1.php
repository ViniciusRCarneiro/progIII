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

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }
}

class Gerente extends Funcionario
{
}

class Desenvolvedor extends Funcionario
{
}

$gerente = new Gerente("João", 20000);
$dev = new Desenvolvedor("Maria", 8000);

echo "Nome: " . $gerente->getNome() . "<br>";
echo "Cargo: Gerente<br>";
echo "Salário: " . $gerente->getSalario() . "<br>";
echo "Bônus: " . $gerente->calcularBonus() . "<br><br>";

echo "Nome: " . $dev->getNome() . "<br>";
echo "Cargo: Desenvolvedor<br>";
echo "Salário: " . $dev->getSalario() . "<br>";
echo "Bônus: " . $dev->calcularBonus();
?>