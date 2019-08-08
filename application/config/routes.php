<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/home';

$route['register'] = 'peserta/register';
$route['login'] = 'peserta/login';
$route['team'] = 'peserta/team';
$route['forget'] = 'peserta/forget';
$route['forget_password'] = 'peserta/forget_password';
$route['resetpassword/(:any)'] = 'peserta/reset_password/$1';
$route['update_password/(:any)'] = 'peserta/update_password/$1';

$route['adminAV18'] = 'adminAV18/index';
$route['news'] = 'berita/index_berita';
$route['news/(:any)'] = 'berita/view_berita/$1';

$route['index'] = 'pages/home';
$route['announcement'] = 'pages/announcement';
$route['infolomba'] = 'pages/infolomba';
$route['seminar'] = 'pages/seminar';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = 'av404';
$route['translate_uri_dashes'] = FALSE;
