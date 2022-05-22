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
        $auxiliar = 0;
        $trocou = 0;
        $hifen = "-";

        for ($i = 1; $i <= 10; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        foreach ($vetor as $chave => $valor) {
            $existe = 0;
            for ($i = 1; $i <= 10; $i++) {
                if ($vetor[$i] == $valor) {
                    $existe++;
                }
            }
            if ($existe >= 2) {
                $vetor[$chave] = "-";
            }
            echo "Valor: " . $vetor[$chave] . "<br>";
        }
        require_once("../src/View/exercicio3.php");
    }
}
