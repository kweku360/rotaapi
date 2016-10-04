<?php
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

$container = $app->getContainer();
$container['view'] = new PhpRenderer("./templates");


/**
Endpoint - '/clubinfo'
Verb - POST
server function - '/suits/create'
creates a single club
 **/
$app->post('/clubinfo', function (Request $request, Response $response)  use($app){
    $data = $request->getParsedBody();
   // var_dump($data);
    $response = $this->view->render($response, "/clubinfo/store.php", ["vars" => $data]);
    return $response;
});


//
//$app->add(function (Request $request,Response $response, $next) {
//    $response->getBody()->write('BEFORE');
//    $response = $next($request, $response);
//    $response->getBody()->write('AFTER');
//
//    return $response;
//});
//test
//$app->get('/hello/{name}', function (Request $request, Response $response)  use($app){
//    //$app->render('clubs/index.php');
//    $body = $request->getParsedBody();
//  //  var_dump($body);
//  //  $name = $request->getAttribute('name');
//    $response->withStatus(400);
//    return $response;
//});

