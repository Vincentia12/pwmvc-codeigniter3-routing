<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['admin']['GET'] = 'admin/index';
$route['admin/daftar']['GET'] = 'admin/daftar';

$route['rumah/(:any)']['GET'] = 'rumah/index';

$route['layanan/ketersediaan']['GET'] = 'layanan/ketersediaan';
$route['layanan/konsultasi']['GET'] = 'layanan/konsultasi';
$route['layanan/daftaronline']['GET'] = 'layanan/daftaronline';


$route['default_controller'] = 'rumah';
$route['404_override'] = 'rumah/notFound';
$route['translate_uri_dashes'] = FALSE;
