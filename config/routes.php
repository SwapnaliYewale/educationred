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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*Admin*/
$route['admin'] = 'admin/home';
$route['datatable'] = 'admin/home/datatable';
$route['editors'] = 'admin/home/editors';


$route['Add-country-flag'] = 'admin/CountryFlagcontroller/addcountryflag';
$route['list-country-flag'] = 'admin/CountryFlagcontroller/viewcountryflag';
$route['edit-country-flag/(:any)'] ='admin/CountryFlagcontroller/editcountryflag/$1';
$route['delete-country-flag/(:any)'] ='admin/countryFlagcontroller/delete/$1';


$route['Add-country'] = 'admin/Countrycontroller/addcountry';
$route['list-country'] = 'admin/Countrycontroller/viewcountry';
$route['edit/(:any)'] ='admin/Countrycontroller/editcountry/$1';
$route['delete/(:any)'] ='admin/countrycontroller/delete/$1';


$route['add-university'] = 'admin/Universitycontroller/adduniversity';
$route['list-university'] = 'admin/Universitycontroller/viewuniversity';
$route['edit-university/(:any)/(:any)'] = 'admin/Universitycontroller/edituniversity/$1/$1';
$route['delete-university/(:any)'] ='admin/Universitycontroller/delete/$1';

$route['add-service'] = 'admin/ServiceController/addservice';
$route['list-service'] = 'admin/ServiceController/viewservice';
$route['edit-service/(:any)'] ='admin/ServiceController/editservice/$1';
$route['delete-service/(:any)'] ='admin/ServiceController/delete/$1';

$route['add-scholarship'] = 'admin/ScolarshipController/addscholarship';
$route['list-scholarship'] = 'admin/ScolarshipController/viewscholarship';
$route['edit-scholarship/(:any)'] ='admin/ScolarshipController/editscholarship/$1';
$route['delete-scholarship/(:any)'] ='admin/ScolarshipController/delete/$1';

$route['add-test'] = 'admin/TestController/addtest';
$route['list-test'] = 'admin/TestController/viewtest';
$route['edit-test/(:any)'] ='admin/TestController/edittest/$1';
$route['delete-test/(:any)'] ='admin/TestController/delete/$1';
$route['submit-test'] = 'admin/TestController/submit';
$route['update-test'] = 'admin/TestController/update';




/*Front*/
$route['country/(:any)'] = 'front/Countrycontroller/usad/$1';
$route['countryflag/(:any)'] = 'front/CountryFlagcontroller/countryflag/$1';
$route['home'] = 'home/indexs';
$route['about'] = 'home/about';
$route['scholarship/(:any)'] = 'front/Scholarshipcontroller/scholarship/$1';
$route['opportunity'] = 'front/OpportunityController/opportunity';
$route['test/(:any)'] = 'front/TestController/test/$1';
$route['contact'] = 'home/contact';
$route['comingsoon'] = 'admin/home/index';
//Service

$route['admission/(:any)'] = 'front/ServiceController/admissioncounceling/$1';