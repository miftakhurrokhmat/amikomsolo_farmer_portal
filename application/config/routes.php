<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth
$route['login']    = 'auth/login';
$route['register'] = 'auth/register';
$route['logout']   = 'auth/logout';

// Dashboard
$route['admin'] = 'dashboard';
$route['admin/dashboard'] = 'dashboard';

// News CRUD
$route['admin/news']                = 'news/index';
$route['admin/news/create']         = 'news/create';
$route['admin/news/edit/(:num)']    = 'news/edit/$1';
$route['admin/news/delete/(:num)']  = 'news/delete/$1';

// Settings
$route['admin/settings/about']   = 'settings/about';
$route['admin/settings/contact'] = 'settings/contact';
$route['admin/settings/demo']    = 'settings/demo';

$route['home/news_detail/(:num)'] = 'home/news_detail/$1';
