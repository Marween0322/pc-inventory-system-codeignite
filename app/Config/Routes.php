<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//routes dor books
$routes->get('/books/index', 'BookController::index');
$routes->get('/books/add', 'BookController::createbook');

//routes for users
$routes->get('/books/list','BookController::bookList');

$routes->get('/books/createBook','BookController::bookStore');

$routes->post('/books/store','BookController::bookStore');

$routes->get('/books/view/(:num)','BookController::bookView/$1');

$routes->post('/books/update/(:num)','BookController::bookUpdate/$1');

$routes->get('/books/delete/(:num)','BookController::bookViewDelete/$1');

$routes->post('/books/delete/(:num)','BookController::bookDelete/$1');

//routes for users
$routes->get('/user/login' , 'UserController::index');

$routes->get('products', 'ProductController::index');


$routes->get('pcs/index', 'PCController::index');
$routes->get('pcs/add', 'PCController::createPC');

// Routes for PC
$routes->get('pcs/list', 'PCController::pcList');
$routes->get('pcs/createPC', 'PCController::pcCreate'); // Change the method name
$routes->post('pcs/store', 'PCController::pcStore');
$routes->get('pcs/show/(:num)', 'PCController::show/$1');
$routes->get('pcs/edit/(:num)', 'PCController::pcEdit/$1');
$routes->post('pcs/update/(:num)', 'PCController::pcUpdate/$1');
$routes->get('pcs/delete/(:num)', 'PCController::pcViewDelete/$1');
$routes->post('pcs/delete/(:num)', 'PCController::pcDelete/$1');
