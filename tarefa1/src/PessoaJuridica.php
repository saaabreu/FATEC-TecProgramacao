<?php

class PessoaJuridica extends Pessoa
{
    private string $cnpj;
    private float $limiteCredito;

    public function __construct($codigo, $nome, $endereco, $numero, $telefone, $cnpj, $limiteCredito)
    {
        parent::__construct($codigo, $nome, $endereco, $numero, $telefone);
        $this->cnpj = $this->validarCnpj($cnpj);
        $this->limiteCredito = $limiteCredito;
    }

    public function exibirDadosCadastrais() {
        echo "{$this->exibirDadosPessoais()}\n CNPJ: {$this->cnpj} \n Limite de Crédito: {$this->limiteCredito}";
    }

    private function validarCnpj($cnpj)
    {
        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
        if (strlen($cnpj) != 14)
        {   echo 'CNPJ Inválido!';
            exit();
        }
        $bloco_1 = substr($cnpj,0,2);
        $bloco_2 = substr($cnpj,2,3);
        $bloco_3 = substr($cnpj,5,3);
        $bloco_4 = substr($cnpj,8,4);
        $dig_verificador = substr($cnpj,-2);
        $cnpj = $bloco_1.".".$bloco_2.".".$bloco_3."/".$bloco_4."-".$dig_verificador;
        return $cnpj;
    }

}
