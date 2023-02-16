<?php

include 'config.php';
include 'autoload.php';
include 'rotas.php';

//ordem dos includes faz diferença, o php é sequencial

$cidades = ['Jaú', 'Bariri', 'Itapuí', 'Dois Córregos'];

//var_dump($cidades);

include 'Controller/Controller.php';

\ApiCep\Controller\Controller::getResponseAsJSON($cidades);


