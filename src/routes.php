<?php
use core\Router;

$router = new Router();

$router->get('/', 'UsuariosController@index');

$router->get('/home', 'HomeController@home');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastrar', 'LoginController@signup');
$router->post('/cadastrar', 'LoginController@signupAction');

$router->get('/pdf', 'HomeController@pdf');
$router->post('/pdfres', 'HomeController@pdfDate');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/deletar', 'UsuariosController@del');

$router->post('/date', 'HomeController@date');