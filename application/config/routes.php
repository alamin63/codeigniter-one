<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Backend Custom Route
$route['dashboard'] = 'Backend';
$route['add-post'] = 'Backend/add_post';
$route['all-post'] = 'Backend/all_post';
$route['add-page'] = 'Backend/add_page';
$route['all-page'] = 'Backend/all_page';
$route['category'] = 'Backend/category';
$route['logo-change'] = 'Backend/logo_change';
$route['footer-color-change'] = 'Backend/footer_color_change';


//Frontend Custom Route
$route['blog']		= 'Frontend/single_page';
$route['about']		= 'Frontend/page';
$route['contact']	= 'Frontend/contact';