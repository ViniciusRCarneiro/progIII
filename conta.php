<?php
class Conta {
    public $numero;
    public $titular;
    public $saldo;

    function depositar(&$saldo, $valor){
        $saldo += $valor;
    }

    function sacar(&$saldo, $valor){
        $saldo -= $valor;
    }
}

$c = new Conta();
$c->saldo = 1002;

$c->depositar($c->saldo, 500);
$c->sacar($c->saldo, 10);

echo "Saldo: " . $c->saldo;
?>