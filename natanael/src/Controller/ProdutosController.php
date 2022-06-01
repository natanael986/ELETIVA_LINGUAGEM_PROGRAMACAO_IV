<?php

namespace Aluno\Natanael\Controller;

use Aluno\Natanael\Model\DAO\ProdutosDAO;
use Aluno\Natanael\Model\Entity\Produtos;

class ClientesController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params)
    {
        $dao = new ProdutosDAO();
        $resultado = $dao->consultarPorID($params[1]);
        require_once "../src/View/Alterar_produto.php";
    }

    public static function abrirListarProdutos()
    {
        $dao = new ProdutosDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto -> setDescricao($_POST['descricao']);
        $produto -> setValor($_POST['valor']);
        $produto -> setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        if($dao -> inserir($produto)){
            return "Inserido com sucesso!";
        }else{
            return "Erro ao inserir";
        }
    }

}