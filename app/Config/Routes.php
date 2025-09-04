<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('contact', 'Home::contact');
$routes->get('about', 'Home::about');
$routes->get('/', 'Home::index');
$routes->get('gallery', 'Home::gallery');
$routes->get('animation', 'Home::animation');
$routes->get('curser', 'Home::curser');


