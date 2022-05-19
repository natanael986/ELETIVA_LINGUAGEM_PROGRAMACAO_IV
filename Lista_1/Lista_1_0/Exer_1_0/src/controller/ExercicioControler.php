<?php


namespace Aluno\Lista_1\Lista_1_0\Exer_1_0\Controller;


class ExercicioController
{

    public static function exibir()
    {
        require_once("../src/View/exer1.php");
    }

    public static function Resultado()
    {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $troco = $valor1 + $valor2;
        require_once("../src/View/exer1.php");
    }
}