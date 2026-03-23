<?php
class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    public $ano;

    function exibir($titulo, $autor, $paginas, $ano){
        echo "Livro: " . $titulo . "<br>";
        echo "Autor: " . $autor . "<br>";
        echo "Páginas: " . $paginas . "<br>";
        echo "Ano: " . $ano . "<br>";
    }
}


$livro1 = new Livro();
$livro1->titulo = "1984";
$livro1->autor = "George Orwell";
$livro1->paginas = 328;
$livro1->ano = 1949;


$livro1->exibir(
    $livro1->titulo,
    $livro1->autor,
    $livro1->paginas,
    $livro1->ano
);
?>