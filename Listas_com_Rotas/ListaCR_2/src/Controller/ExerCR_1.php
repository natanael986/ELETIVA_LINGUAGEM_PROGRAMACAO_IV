<?php


namespace Aluno\Natanael\Controller;


class ExerCR_1
{

    public static function exibir()
    {
        require_once("../src/View/exercicio1.php");
    }


    public static function exibirResultado()
    {
        for ($i = 1; $i <= 10; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        $posicao = 0;
        $maior = 0;

        //var_dump($vetor)
        foreach ($vetor as $chave => $valor) {
            $posicaoValor = "posição do vetor: $chave e seu valor é $valor";
            if ($valor > $maior) {
                $maior = $valor;
                $posicao = $chave;
            }
        }
        $maiorValor = "O maior valor é $maior e está na posição $posicao";
        $valorPosicao = $posicaoValor;

        require_once("../src/View/exercicio1.php");
    }
}
