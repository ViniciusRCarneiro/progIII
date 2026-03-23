<?php
class Aluno {
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    function media($n1, $n2){
        return ($n1 + $n2) / 2;
    }

    function situacao($media){
        if($media >= 7){
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

$a = new Aluno();
$a->nota1 = 8;
$a->nota2 = 1;

$m = $a->media($a->nota1, $a->nota2);

echo "Média: $m <br>";
echo "Situação: " . $a->situacao($m);
?>