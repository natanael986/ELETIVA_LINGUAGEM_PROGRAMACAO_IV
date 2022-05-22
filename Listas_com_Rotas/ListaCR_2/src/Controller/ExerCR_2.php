<?php


namespace Aluno\Natanael\Controller;


class ExerCR_2
{

    public static function exibir()
    {
        require_once("../src/View/exercicio2.php");
    }


    public static function exibirResultado()
    {
        for ($i = 1; $i <= 20; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        $valorProcurar = $_POST["valorProcurar"];
        $cont = 0;
        $naoEncontrado = true;

        foreach ($vetor as $chave => $valor) {
            if ($valor == $valorProcurar) {
                $cont++;
                echo "Valor : $valorProcurar está na posição : $chave ";
                echo "<br>";
                $naoEncontrado = false;
            }
        }
        echo "O valor está em ".$cont." posições";
        if ($naoEncontrado) {
            echo "Valor não encontrado";
        }
        require_once("../src/View/exercicio2.php");
    }
}
