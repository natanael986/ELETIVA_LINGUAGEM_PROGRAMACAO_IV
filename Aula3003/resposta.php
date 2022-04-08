<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema em PHP</title>
</head>

<body class="container">
    <h1>Sistema em PHP</h1>

    <?php
    if ($_POST) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        /*setcookie("usuario", $email, time() + (86400 * 1), "/");
        echo "Seja bem vindo ".$_COOKIE['usuario'];*/

        session_start();
        if (($email == "faroso@gmail.com") && ($senha == "123")) {
            $_SESSION['usuario'] = $email;
            $_SESSION['acesso'] = true;
            echo "Bem vindo usúario " . $_SESSION['usuario'];
            echo '<br><a href="sair.php">Sair</a>';
        } else {
            header('Location: index.php');
            exit;
        }
    } else {
        session_start();
        if ($_SESSION['acesso'] == true) {
            echo "Seja bem vindo usuário " . $_SESSION['usuario'];
            echo '<br><a href="sair.php">Sair</a>';
        } else {
            header('Location: index.php');
            exit;
        }
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