<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3</title>
</head>

<body class="container">
    <h1>Resultado ex 5</h1>
    <div class="col-5 mt-4 ms-5">
        <table class="table text-center">
            <thead class="table-primary ">
                <tr>
                    <th scope="col">IMC</th>
                    <th scope="col">Classificação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="table-primary" scope="row">abaixo de 18,5</th>
                    <td class="table-secondary">abaixo do peso</td>
                </tr>
                <tr>
                    <th class="table-primary" scope="row">entre 18,6 e 24,9</th>
                    <td>Peso ideal(parabéns)</td>
                </tr>
                <tr>
                    <th class="table-primary" scope="row">entre 25,0 e 29,9</th>
                    <td class="table-secondary">Levemente acima do peso</td>
                </tr>
                <tr>
                    <th class="table-primary" scope="row">entre 30,0 e 34,9</th>
                    <td>Obesidade grau I</td>
                </tr>
                <tr>
                    <th class="table-primary" scope="row">entre 35,0 e 39,9</th>
                    <td class="table-secondary">Obesidade grau II(severa)</td>
                </tr>
                <tr>
                    <th class="table-primary" scope="row">acima 40</th>
                    <td>Obesidade grau III(mórbida)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    $altura = $_POST['alt'];
    $peso = $_POST['peso'];
    $imc = 0;
    $imc = $peso / ($altura * $altura);
    $form_num = number_format($imc, 1, '.', '');
    if ($imc <= 18.5) {
        echo "Seu IMC $form_num, você está abaixo do peso!<br/>";
    } else if ($imc >= 18.6 and $imc <= 24.9) {
        echo "Seu IMC $form_num, você está no peso ideal (parabéns)!<br/>";
    } else if ($imc >= 25 and $imc <= 29.9) {
        echo "Seu IMC $form_num, você está levemente acima do peso!<br/>";
    } else if ($imc >= 30 and $imc <= 34.9) {
        echo "Seu IMC $form_num, obesidade grau I!<br/>";
    } else if ($imc >= 35 and $imc <= 39.9) {
        echo "Seu IMC $form_num, obesidade grau II (severa)!<br/>";
    } else
        echo "Seu IMC $form_num, Obesidade grau III (mórbida)!<br/>";
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