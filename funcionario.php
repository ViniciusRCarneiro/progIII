<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;

    function salarioAnual($salario){
        return $salario * 12;
    }
}

$f = new Funcionario();
$f->nome = "João";
$f->cargo = "Dev";
$f->salario = 3000;

echo "Nome: $f->nome <br>";
echo "Cargo: $f->cargo <br>";
echo "Salário anual: " . $f->salarioAnual($f->salario);
?>