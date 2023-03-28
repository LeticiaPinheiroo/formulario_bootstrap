<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome'] ."<br><br>");
        echo $pessoa->getNome();

        $pessoa->setTelefone($_POST['telefone']."<br><br>");
        echo $pessoa->getTelefone();

        $pessoa->setOrigem($_POST['origem']."<br><br>");
        echo $pessoa->getOrigem();

       

        $pessoa->setDatacontato($_POST['datacontato']."<br><br>");
        echo $pessoa->getDatacontato();

        $pessoa->setObservacao($_POST['observacao']."<br><br>");
        echo $pessoa->getObservacao();


    }
}new Teste();

?>