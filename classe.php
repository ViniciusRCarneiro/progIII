<?php 
class Animal{
    //atributos
public $tamanho;
public $cor;
public $numeroPatas;
public $pelagem;
//metodos
public function andar(){
    echo "andando";
}
public function falar(){
    echo "falando";
}
public function comer(){
    echo"comendo";
}
}

//instanciar objetos
$garfield = new Animal(); //instanciei objeto da classe animal
$garfield->cor = "Laranja"; 
$garfield->numeroPatas = "4";
$garfield->pelagem = "media";
$garfield->tamanho = "50";


echo "O garfield tem a cor " . $garfield->cor . "<br>";
echo "O garfield tem " . $garfield->numeroPatas . " patas <br>";
echo "O garfield tem a pelagem " . $garfield->pelagem . "<br>";
echo "O garfield tem tamanho " . $garfield->tamanho . " cm <br>";

$garfield->falar();
?>