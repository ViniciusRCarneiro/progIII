<?php
class Pessoa {
    public $nome;
    public $idade;
    public $genero;

    function exibir($n, $i, $g){
        echo "Nome: $n <br>Idade: $i <br>Gênero: $g";
    }
}

$p = new Pessoa();
$p->nome = "Maria";
$p->idade = 64;
$p->genero = "Feminino";

$p->exibir($p->nome, $p->idade, $p->genero);
?>