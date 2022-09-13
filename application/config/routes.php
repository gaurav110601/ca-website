<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'ca';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['contact'] = "ca/contact";
$route['register'] = "ca/register";
$route['login'] = "ca/login";
$route['index'] = "ca";
$route['dashboard'] = "ca/dashboard";
$route['admin'] = "ca/admin_login";
$route['admin_dashboard'] = "ca/admin_dashboard";
$route['admin_dashboard_register'] = "ca/admin_dashboard_register";
$route['admin_dashboard_contacts'] = "ca/admin_dashboard_contacts";
$route['who_we_are'] = "ca/who_we_are";
$route['about_us'] = "ca/about_us";
$route['admin_dashboard_slider'] = "ca/admin_dashboard_slider";
$route['slider_add'] = "ca/slider_add";
$route['why_choose_us_add'] = "ca/why_choose_us_add";
$route['admin_dashboard_why_choose_us'] = "ca/admin_dashboard_why_choose_us";
$route['admin_about'] = "ca/admin_about";
$route['about_add'] = "ca/about_add";
$route['admin_features'] = "ca/admin_features";
$route['features_add'] = "ca/features_add";
$route['admin_services'] = "ca/admin_services";
$route['services_add'] = "ca/services_add";
$route['admin_team'] = "ca/admin_team";
$route['team_add'] = "ca/team_add";
$route['admin_headline'] = "ca/admin_headline";
$route['headline_add'] = "ca/headline_add";
$route['admin_dashboard_header'] = "ca/admin_dashboard_header";
$route['admin_footer2'] = "ca/admin_footer2";
$route['admin_news'] = "ca/admin_news";
$route['news_add'] = "ca/news_add";
$route['pay'] = "ca/pay";

