<?php


namespace Aluno\Natanael\Controller;


class ExerCR_4
{

    public static function exibir()
    {
        require_once("../src/View/exercicio4.php");
    }


    public static function exibirResultado()
    {
        $valor = $_POST['valor'];

        if ($valor > 0)
            $result = "O valor informado é positivo";

        if ($valor < 0)
            $result = "O valor informado é negativo";

        if ($valor == 0)
            $result = "O valor informado é igual a 0";


        require_once("../src/View/exercicio4.php");
    }
}
