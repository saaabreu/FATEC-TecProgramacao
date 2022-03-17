<?php

class PessoaFisica extends Pessoa
{
    private string $cpf;
    private int $qtdadeFilhos;

    public function __construct($codigo, $nome, $endereco, $numero, $telefone, $cpf, $qtdadeFilhos)
    {
        parent::__construct($codigo, $nome, $endereco, $numero, $telefone);
        $this->cpf = $this->validarCpf($cpf);
        $this->qtdadeFilhos = $qtdadeFilhos;
    }

    public function exibirDadosCadastrais() {
        echo "{$this->exibirDadosPessoais()}\n CPF: {$this->cpf} \n Quantidade de filhos: {$this->qtdadeFilhos}";
    }

    private function validarCpf($cpf)
    {
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        if (strlen($cpf) != 11)
        {   echo 'CPF Inválido!';
            exit();
        }
        $bloco_1 = substr($cpf,0,3);
        $bloco_2 = substr($cpf,3,3);
        $bloco_3 = substr($cpf,6,3);
        $dig_verificador = substr($cpf,-2);
        $cpf = $bloco_1.".".$bloco_2.".".$bloco_3."-".$dig_verificador;
        return $cpf;
    }
}