<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/edit/(:any)'] = 'posts/edit/$1';
$route['posts/(:any)'] = 'posts/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';

$route['(:any)'] = 'pages/view/$1';
 
$route['translate_uri_dashes'] = FALSE;


