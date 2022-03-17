<?php 

require_once 'src/Pessoa.php';
require_once 'src/PessoaFisica.php';
require_once 'src/PessoaJuridica.php';


/*$pf = new PessoaFisica('1','Joãozinho dos Santos','Rua dos Ipês Amarelos - Jardim Ipê - SP','17A','11948745147','48752147868',2);
$pf->exibirDadosCadastrais();*/

$pj = new PessoaJuridica('1','Canto da Massa','Rua dois - Bairro dos números - SP','487','11954874120','48752147865478',1200.5);
$pj->exibirDadosCadastrais();