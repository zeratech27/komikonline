<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
$routes->get('komik', 'Komik::index');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');
$routes->get('/komik/data/create', 'Komik::create');
$routes->post('/komik/data/save', 'Komik::save');
$routes->delete('/komik/hapus/(:num)', 'Komik::hapus/$1');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');

$routes->get('cicilan', 'Cicilan::index');
$routes->post('simulasi/hitung', 'Cicilan::hitung');
