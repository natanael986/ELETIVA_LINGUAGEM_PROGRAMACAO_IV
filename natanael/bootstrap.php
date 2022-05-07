<?php


require_once __DIR__ . "/vendor/autoload.php";


//Aqui a gente recupera o que o usuário digitou e qual
//método HTTP ele utilizou

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];


//Instanciar classe Router
$router = new \Aluno\Natanael\Router($method, $path);

//ADCIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get("/ola-mundo", function () {
    return "Olá Mundo";
});

$router->get('/exemplo', "Aluno\Natanael\Controller\ExercicioController::exibir");

$router->post("/exemplo-resultado", "Aluno\Natanael\Controller\ExercicioController::exibirResultado");

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Páginas não encontrada";
    die();
}

echo $result($router->getParams());
