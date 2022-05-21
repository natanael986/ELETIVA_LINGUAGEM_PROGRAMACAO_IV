<?php


namespace Aluno\Natanael\Controller;


class ExerCR_3
{

    public static function exibir3()
    {
        require_once("../src/View/exercicio3.php");
    }


    public static function exibirResultado3()
    {
        $valor = $_POST['valor'];

        if ($valor > 10)
            echo "<br>O valor é maior que 10";

        elseif ($valor == 10)
            echo "<br>O valor é igual a 10";

        else
            echo "O valor é menor que 10";
            
        require_once("../src/View/exercicio3.php");
    }
}
