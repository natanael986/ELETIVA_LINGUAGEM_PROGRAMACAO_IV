<?php


namespace Aluno\Natanael\Controller;


class ExerCR_5
{

    public static function exibir()
    {
        require_once("../src/View/exercicio5.php");
    }


    public static function exibirResultado()
    {
        echo '<div class=" row mt-4">';
        echo '<div class="col-3 border me-4">';
            echo '<h3>Vetor não ordenado</h3>';

            for ($i = 1; $i <= 10; $i++) {
                $vetor[$i] = $_POST["valor$i"];
            }

            foreach ($vetor as $chave => $valor) {
                echo "Posição do vetor: $chave seu valor é: $valor";
                echo "<br>";
            }
        echo '</div>';

        echo '<div class="col-3 border ms-4">';
            echo '<h3>Vetor crescente</h3>';

            $auxiliar = 0;
            $trocou = 1;

            while ($trocou == 1) {
                $trocou = 0;
                for ($i = 1; $i < 10; $i++) {
                    if ($vetor[$i] > $vetor[$i + 1]) {
                        $auxiliar = $vetor[$i];
                        $vetor[$i] = $vetor[$i + 1];
                        $vetor[$i + 1] = $auxiliar;
                        $trocou = 1;
                    }
                }
            }
            foreach ($vetor as $chaves => $valor1) {
                echo "Posição do vetor: $chaves seu valor é: $valor1";
                echo "<br>";
            }
        echo '</div>';

        echo '<div class="col-3 border ms-4">';
            echo '<h3>Vetor decrescente</h3>';

            $auxiliar = 0;
            $trocou = 1;

            while ($trocou == 1) {
                $trocou = 0;
                for ($i = 1; $i < 10; $i++) {
                    if ($vetor[$i] < $vetor[$i + 1]) {
                        $auxiliar = $vetor[$i];
                        $vetor[$i] = $vetor[$i + 1];
                        $vetor[$i + 1] = $auxiliar;
                        $trocou = 1;
                    }
                }
            }
            foreach ($vetor as $chave2 => $valor2) {
                echo "Posição do vetor: $chave2 seu valor é: $valor2";
                echo "<br>";
            }
            
        echo '</div>';
    echo '</div>';
        require_once("../src/View/exercicio5.php");
    }
}
