<?php

require_once __DIR__ . '/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\Natanael\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

//Exercio 1
$router->get(
        '/exercicio1',
        'Aluno\Natanael\Controller\ExerCR_1::exibir'
);

$router->post(
        '/exercicio1-resultado',
        'Aluno\Natanael\Controller\ExerCR_1::exibirResultado'
);

//exercicio 2
$router->get(
        '/exercicio2',
        'Aluno\Natanael\Controller\ExerCR_2::exibir'
);

$router->post(
        '/exercicio2-resultado',
        'Aluno\Natanael\Controller\ExerCR_2::exibirResultado'
);

//exercicio 3
$router->get(
        '/exercicio3',
        'Aluno\Natanael\Controller\ExerCR_3::exibir'
);

$router->post(
        '/exercicio3-resultado',
        'Aluno\Natanael\Controller\ExerCR_3::exibirResultado'
);

//exercicio 4
$router->get(
        '/exercicio4',
        'Aluno\Natanael\Controller\ExerCR_4::exibir'
);

$router->post(
        '/exercicio4-resultado',
        'Aluno\Natanael\Controller\ExerCR_4::exibirResultado'
);

//exercicio 5
$router->get(
        '/exercicio5',
        'Aluno\Natanael\Controller\ExerCR_5::exibir'
);

$router->post(
        '/exercicio5-resultado',
        'Aluno\Natanael\Controller\ExerCR_5::exibirResultado'
);

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result) {
        http_response_code(404);
        echo "Página não encontrada";
        die();
}

echo $result($router->getParams());
