<?php

namespace Aluno\Natanael\Controller;

use Aluno\Natanael\Model\DAO\ClientesDAO;
use Aluno\Natanael\Model\Entity\Clientes;

class ClientesController
{

    public static function abrirFormularioInserir()
    {
        require_once "../src/View/inserir_cliente.php";
    }

    public static function abrirFormularioAlterar($params)
    {
        $dao = new ClientesDAO();
        $resultado = $dao->consultarPorID($params[1]);
        require_once "../src/View/Alterar_cliente.php";
    }

    public static function abrirListarClientes()
    {
        $dao = new ClientesDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_clientes.php";
    }


    public static function inserirCliente()
    {
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)) {
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListarClientes();
    }

    public static function editarCliente($params){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $cliente->setId($params[1]);
        $dao = new ClientesDAO();
        if ($dao->alterar($cliente)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListarClientes();
    }

    public static function excluirCliente($params){
        $dao = new ClientesDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::abrirListarClientes();
    }
}
