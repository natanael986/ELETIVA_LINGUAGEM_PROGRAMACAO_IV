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
    <h1>Resultado ex 3</h1>
    <?php
<<<<<<< HEAD
    $auxiliar = 0;
    $trocou = 0;
    $hifen = "-";
=======

>>>>>>> 985977fb4ffc6af8ee8981a95f46a18f9b154906
    for ($i = 1; $i <= 10; $i++) {
        $vetor[$i] = $_POST["valor$i"];
    }

<<<<<<< HEAD

    while ($trocou == 1) {
        $trocou = 0;
        for ($i = 1; $i < 10; $i++) {
            if ($vetor[$i] == $vetor[$i]) {
                $auxiliar = $vetor[$i];
                $vetor[$i] = $vetor[$i + 1];
                $vetor[$i + 1] = $hifen;
                $trocou = 1;
            }
        }
    }


=======
>>>>>>> 985977fb4ffc6af8ee8981a95f46a18f9b154906
    foreach ($vetor as $chave => $valor) {
        $existe = 0;
        for ($i = 1; $i <= 10; $i++){
            if ($vetor[$i] == $valor){
                $existe++;
            }
        }
        if ($existe >= 2)
            $vetor[$chave] = "-";
        echo "Valor: ".$vetor[$chave]."<br>";
    }
    ?>

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