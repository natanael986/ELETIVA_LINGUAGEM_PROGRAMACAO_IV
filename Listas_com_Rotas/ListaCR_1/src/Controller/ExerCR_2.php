<?php


namespace Aluno\Natanael\Controller;


class ExerCR_1
{

    public static function exibir2()
    {
        require_once("../src/View/exercicio2.php");
    }


    public static function exibirResultado2()
    {
        $valor = $_POST['valor'];
        $qtdeQ = $_POST['qtdeQ'];
        $valor = $valor * $qtdeQ;
        require_once("../src/View/exercicio2.php");
    }
}
