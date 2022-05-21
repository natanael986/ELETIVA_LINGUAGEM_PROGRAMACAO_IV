<?php

namespace Aluno\Natanael\Controller;

use Aluno\Natanael\Model\DAO\ClientesDAO;
use Aluno\Natanael\Model\Entity\Clientes;

class ClientesController
{
    public static function abrirFormularioInserir()
    {
        require_once "../src/View/inserir_clientes.php";
    }

    public static function inserirCliente()
    {
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setNome($_POST['nome']);
        $cliente->setIdade($_POST['idade']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)) {
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }
}
