<?php
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    //página inicial
    case '/':
        require 'dashboard.php';
        die();
        break;


    //páginas que mostram detalhes dos filmes
    case '/detalhes/a-freira2':
        require 'detalhes-freira2.php';
        die();
        break;

    case '/detalhes/besouro-azul':
        require 'detalhes-besouro_azul.php';
        die();
        break;

    case '/detalhes/vermelho-branco-sangue-azul':
        require 'detalhes-vermelho-branco-sangue-azul.php';
        die();
        break;

    case '/detalhes/guardioes-da-galaxia-3':
        require 'detalhes-guardioes-da-galaxia-3.php';
        die();
        break;

    case '/detalhes/five-nights-at-freddy':
        require 'detalhes-five-nights-at-freddy.php';
        die();
        break;


    //Erro 404
    default:
        echo "Recurso: '".$uri."' não encontrado - 404";
        break;
}
