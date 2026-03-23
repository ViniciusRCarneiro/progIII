<?php
class Triangulo {
    public $a;
    public $b;
    public $c;

    function tipo($a, $b, $c){
        if($a == $b && $b == $c){
            return "Equilátero";
        } elseif($a == $b || $a == $c || $b == $c){
            return "Isósceles";
        } else {
            return "Escaleno";
        }
    }
}

$t = new Triangulo();
echo "Tipo: " . $t->tipo(3,0,3);
?>