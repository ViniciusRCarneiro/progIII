<?php

require_once "Funcionario.php";

$func = new Funcionario();

$func->setNome("");
$func->setIdade(-10);
$func->setSalario(0);

echo "<hr>";

$func->setNome("Ana");
$func->setIdade(25);
$func->setSalario(3000);

echo "Cadastro realizado com sucesso.<br>";

?>