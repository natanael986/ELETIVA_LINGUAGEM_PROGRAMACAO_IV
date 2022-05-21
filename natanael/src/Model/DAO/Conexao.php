<?php

namespace Aluno\Natanael\Model\DAO;

class Conexao
{
    public static function conectar()
    {
        return
            new PDO("mysql:host=localhost; dbname=projetoPHP", "root", "");
    }
}
