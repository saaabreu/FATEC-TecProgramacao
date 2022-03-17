<?php

class Pessoa
{
    protected string $codigo;
    protected string $nome;
    protected string $endereco; 
    protected string $numero;
    protected string $telefone;

    public function __construct($codigo, $nome, $endereco, $numero, $telefone)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->telefone = $telefone;
    }

    protected function exibirDadosPessoais() {
        echo " Nome: {$this->nome} \n Endereço: {$this->endereco}, Número: {$this->numero} \n Telefone: {$this->telefone}";
    }

}
