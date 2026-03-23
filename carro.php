<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $velocidade = 0;

    function acelerar($vel){
        return $vel + 10;
    }

    function frear($vel){
        return $vel - 10;
    }
}

$c = new Carro();
$c->marca = "Toyota";
$c->modelo = "Corolla";
$c->ano = 2020;

echo "Velocidade: " . $c->acelerar($c->velocidade) . "<br>";
echo "Velocidade após frear: " . $c->frear(50);
?>