<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 2</title>
</head>

<body class="container">
    <h1>Resultado ex 5</h1>
    <div class=" row mt-4">
        <div class="col-3 border me-4">
            <h3>Vetor não ordenado</h3>
            <?php

            for ($i = 1; $i <= 10; $i++) {
                $vetor[$i] = $_POST["valor$i"];
            }

            foreach ($vetor as $chave => $valor) {
                echo "Posição do vetor: $chave seu valor é: $valor";
                echo "<br>";
            }
            ?>
        </div>

        <div class="col-3 border ms-4">
            <h3>Vetor crescente</h3>
            <?phP

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
            ?>
        </div>

        <div class="col-3 border ms-4">
            <h3>Vetor decrescente</h3>
            <?phP

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
            ?>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>