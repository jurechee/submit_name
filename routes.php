<?php

// $router->define([

// '' => 'controllers/index.php',
// 'about' => 'controllers/about.php',
// 'about/culture' => 'controllers/about-culture.php',
// 'contact' => 'controllers/contact.php',
// 'names' => 'controllers/add-name.php'
// ]); // assiciation between controllers and the views
//exemplo.com/about - >direct traffic to the specific 
//controller and the controller requires or return the specific view

//Route::get('about', 'controllers/about.php');

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');

//var_dump($router->routes);