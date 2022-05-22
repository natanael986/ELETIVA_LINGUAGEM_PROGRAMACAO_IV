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
        for ($i = 1; $i <= 10; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        $valores = 0;
        foreach ($vetor as $chave => $valor) {
            $valores = $valores + $valor;
        }

        $result = "A média dos valores digitados é: " . ($valores / 10);

        require_once("../src/View/exercicio4.php");
    }
}
