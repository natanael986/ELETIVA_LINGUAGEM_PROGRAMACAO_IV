<?php


namespace Aluno\Natanael\Controller;


class ExerCR_3
{

    public static function exibir()
    {
        require_once("../src/View/exercicio3.php");
    }


    public static function exibirResultado()
    {
        $valor = $_POST['valor'];

        if ($valor > 10)
            $result = "O valor é maior que 10";

        elseif ($valor == 10)
            $result = "O valor é igual a 10";
        else
            $result = "O valor é menor que 10";

        require_once("../src/View/exercicio3.php");
    }
}
