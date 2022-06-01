<?php


require_once __DIR__ . '/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\Natanael\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function () {
    return "Olá Mundo!";
});

$router->get(
    '/exemplo',
    'Aluno\Natanael\Controller\ExercicioController::exibir'
);

$router->post(
    '/exemplo-resultado',
    'Aluno\Natanael\Controller\ExercicioController::exibirResultado'
);

$router->get(
    '/cliente/novo',
    'Aluno\Natanael\Controller\ClientesController::abrirFormularioInserir'
);

$router->post(
    '/cliente/inserir',
    'Aluno\Natanael\Controller\ClientesController::inserirCliente'
);

$router->get(
    '/clientes',
    'Aluno\Natanael\Controller\ClientesController::abrirListarClientes'
);

$router->get(
    '/cliente/alterar/{id}',
    'Aluno\Natanael\Controller\ClientesController::abrirFormularioAlterar'
);

$router->post('/cliente/editar/{id}',
'Aluno\Natanael\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}',
'Aluno\Natanael\Controller\ClientesController::excluirCliente');

// Produtos
$router->get(
    '/produto/novo',
    'Aluno\Natanael\Controller\ProdutosController::abrirFormularioInserir'
);

$router->post(
    '/produto/inserir',
    'Aluno\Natanael\Controller\ProdutosController::inserirProduto'
);

$router->get(
    '/produtos',
    'Aluno\Natanael\Controller\ProdutossController::abrirListarProdutos'
);

$router->get(
    '/produto/alterar/{id}',
    'Aluno\Natanael\Controller\ProdutosController::abrirFormularioAlterar'
);

$router->post('/produto/editar/{id}',
'Aluno\Natanael\Controller\ProdutosController::editarProduto');

$router->get('/produto/excluir/{id}',
'Aluno\Natanael\Controller\ProdutosController::excluirProduto');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());
