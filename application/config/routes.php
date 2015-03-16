<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['home'] = "products/index";
$route['show'] = "products/showProduct";
$route['edit'] = "products/editProduct";
$route['new'] = "products/newProduct";
$route['create'] = "products/createProduct";
$route['update'] = "products/updateProduct";
$route['destroy'] = "products/destroyProduct";
$route['404_override'] = '';

//end of routes.php