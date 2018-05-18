<?php

$router->group([
	'prefix'=>'lumen/api', 'middleware' => []
], function($router){
	$router->post('auth/login', 'Auth\AuthController@login');
	$router->post('auth/register', 'Auth\AuthController@register');
	$router->get('auth/logout', 'Auth\AuthController@logout');
});
$router->get('get-products','Product\ProductController@getProducts');

//$router->get('/key-generate', function() {
//	return str_random(32);
//});

