<?php
class Circulo {
    public $raio;

    function area($r){
        return 3.14 * $r * $r;
    }

    function perimetro($r){
        return 2 * 3.14 * $r;
    }
}

$c = new Circulo();
$c->raio = 5;

echo "Área: " . $c->area($c->raio) . "<br>";
echo "Perímetro: " . $c->perimetro($c->raio);
?>