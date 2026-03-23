<?php
class Retangulo {
    public $comprimento;
    public $largura;

    function area($c, $l){
        return $c * $l;
    }

    function perimetro($c, $l){
        return 2 * ($c + $l);
    }
}

$r = new Retangulo();
$r->comprimento = 5;
$r->largura = 3;

echo "Área: " . $r->area($r->comprimento, $r->largura) . "<br>";
echo "Perímetro: " . $r->perimetro($r->comprimento, $r->largura);
?>