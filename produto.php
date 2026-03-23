<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function adicionarEstoque(&$produto, $quantidade) {
        if ($quantidade > 0) {
            $produto['quantidade'] += $quantidade;
            echo "$quantidade unidades adicionadas ao estoque.<br>";
        } else {
            echo "Quantidade inválida.<br>";
        }
    }

    public function removerEstoque(&$produto, $quantidade) {
        if ($quantidade > 0 && $quantidade <= $produto['quantidade']) {
            $produto['quantidade'] -= $quantidade;
            echo "$quantidade unidades removidas do estoque.<br>";
        } else {
            echo "Estoque insuficiente ou valor inválido.<br>";
        }
    }

    public function exibirInformacoes($produto) {
        echo "Produto: " . $produto['nome'] . "<br>";
        echo "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
        echo "Quantidade: " . $produto['quantidade'] . "<br>";
    }
}

$produto1 = ['nome' => 'Notebook', 'preco' => 3500, 'quantidade' => 10];
$produto2 = ['nome' => 'Mouse', 'preco' => 50, 'quantidade' => 100];

$produto = new Produto();

$produto->exibirInformacoes($produto1);
$produto->adicionarEstoque($produto1, 5);
$produto->removerEstoque($produto1, 3);
$produto->exibirInformacoes($produto1);

$produto->exibirInformacoes($produto2);
$produto->removerEstoque($produto2, 20);
$produto->adicionarEstoque($produto2, 10);
$produto->exibirInformacoes($produto2);

?>