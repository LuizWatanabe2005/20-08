<?php

class Funcionario {
    // atributos
    public $nome='Japa';
    public $telefone='43 95959-5959';
    public $numFilhos=0;

    // funções e mérodos
    function resumirCardFunc () {
        return "$this->nome e ele possui $this->numFilhos filhos";
    }

    function modificarNumFilhos ($numFilhos) {
        return $this->numFilhos = $numFilhos;
    } 

}

$y= new Funcionario();
//echo $y->modificarNumFilhos() . '<br />';
echo $y->modificarNumFilhos(3) . '<br />';

echo $y->resumirCardFunc();


?>