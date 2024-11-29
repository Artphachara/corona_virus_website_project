<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use Psr\Http\Message\RequestInterface AS Request;
use Psr\Http\Message\ResponseInterface AS Response;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFacetory::create();

$app->get('/hello/{name}', function(Request $request, Response $response, $args){
	$name = $args['name'];
	$response->getBody()->write("Hello, $name");
	return $response;
});

$app->run();