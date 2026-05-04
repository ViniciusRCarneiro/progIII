<?php

class Funcionario {
    private $nome;
    private $idade;
    private $salario;

    public function setNome($nome) {
        if (empty($nome)) {
            echo "Erro: o nome não pode ser vazio.<br>";
            return false;
        }
        $this->nome = $nome;
        return true;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        if ($idade < 0 || $idade > 120) {
            echo "Erro: a idade deve estar entre 0 e 120.<br>";
            return false;
        }
        $this->idade = $idade;
        return true;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setSalario($salario) {
        if ($salario <= 0) {
            echo "Erro: o salário deve ser maior que zero.<br>";
            return false;
        }
        $this->salario = $salario;
        return true;
    }

    public function getSalario() {
        return $this->salario;
    }
}

?>