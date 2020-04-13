<?php

include 'core/Router.php';
include 'core/Request.php';
include 'controllers/TurnosController.php';
include 'controllers/NuevoTurnoController.php';
include 'controllers/ListaTurnosController.php';
include 'Formulario.php';


use App\core\Router;
use App\core\Request;

$router = new Router;
$router->define([
    'GET /' => 'TurnosController@index',
    'GET /nuevo_turno' => 'NuevoTurnoController@new',
    'GET /lista_de_turnos' => 'ListaTurnosController@new',
]);

$request = new Request;