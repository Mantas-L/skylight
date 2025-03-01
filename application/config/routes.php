<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "content";
$route['404_override'] = 'content';

$route['art/(:any)'] = "$1";
$route['mimed/(:any)'] = "$1";
$route['physics/(:any)'] = "$1";
$route['calendars/(:any)'] = "$1";
$route['cockburn/(:any)'] = "$1";
$route['fairbairn/(:any)'] = "$1";
$route['alumni/(:any)'] = "$1";
$route['iconics/(:any)'] = "$1";
$route['openbooks/(:any)'] = "$1";
$route['anatomy/(:any)'] = "$1";
$route['exhibitions/(:any)'] = "$1";
$route['stcecilias/(:any)'] = "$1";
$route['audio/(:any)'] = "$1";
$route['towardsdolly/(:any)'] = "$1";
$route['coimbra/(:any)'] = "$1";
$route['coimbra-colls/(:any)'] = "$1";
$route['lhsacasenotes/(:any)'] = "$1";
$route['guardbook/(:any)'] = "$1";
$route['archivemedia/(:any)'] = "$1";
$route['speccoll/(:any)'] = "$1";
$route['geddes/(:any)'] = "$1";
$route['public-art/(:any)'] = "$1";
$route['jlss/(:any)'] = "$1";
$route['bodylanguage/(:any)'] = "$1";
$route['eerc/(:any)'] = "$1";
$route['umis/(:any)'] = "$1";
$route['pointsofarrival/(:any)'] = "$1";
$route['arch-dig/(:any)'] = "$1";
$route['sitemap\.xml'] = "sitemap/sitemap";


/* End of file routes.php */
/* Location: ./application/config/routes.php */