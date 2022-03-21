<?php
    $auxiliar = 0;
    $trocou = 1;

    for ($i = 1; $i <= 10; $i++) {
        $vetor[$i] = $_POST["valor$i"];
    }

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
    ?>