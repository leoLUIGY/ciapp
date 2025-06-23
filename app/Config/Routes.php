<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get("/articles", "Articles::index");
$routes->get("/articles/(:num)", "Articles::show/$1");
$routes->get("/articles/new", "Articles::new");
$routes->post("/articles/create", "Articles::create");