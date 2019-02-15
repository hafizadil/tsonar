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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//customize page urls
$route['signup'] = 'home/signUp';
$route['login'] = 'home/signIn';
$route['logout'] = 'home/logout';
$route['linkedin'] = 'home/login_linkedin';
$route['session'] = 'home/session';
$route['resetpassword'] = 'home/forgotpassword';
$route['setpassword'] = 'home/setPassword';
$route['activation'] = 'home/mailConfirmation';
$route['resetp'] = 'home/resetp';
$route['contact'] = 'home/ContactUs';
$route['hire_now/(:any)'] = 'home/hireNow/$1';

// admin login
$route['admin'] = 'admin/adminLogin/signIn';
$route['dashboard'] = 'admin/dashboard/dashboard_';
$route['fetchDashboardJobs'] = 'admin/dashboard/fetch_dashboard_jobs';
$route['fetchDashboardTalents'] = 'admin/dashboard/fetch_dashboard_talents';
$route['fetchDashboardIntros'] = 'admin/dashboard/fetch_dashboard_intros';

// profile arrangment
$route['agencyRecruiterProfile'] = 'admin/profile/agencyRecruiterProfile';
$route['userProfile'] = 'admin/profile/userProfile';
$route['update_userProfile'] = 'admin/profile/update_userProfile';
$route['update_userImage'] = 'admin/profile/update_userImage';

// admin pages of admin sides

$route['hiringSpecialists'] = 'admin/adminPages/hiring_specialists';
$route['hiringServices'] = 'admin/adminPages/hiring_services';
$route['hiringBillings'] = 'admin/adminPages/hiring_billings';
$route['hiringReports'] = 'admin/adminPages/hiring_reports';
$route['hiringForms'] = 'admin/adminPages/hiring_forms';
$route['recruiterSystemAdmin'] = 'admin/adminPages/recruiter_system_admin';
$route['agencyUsage'] = 'admin/adminPages/agency_usage';
$route['startingFeeMatrix'] = 'admin/adminPages/starting_fee_matrix';
/*-----------------------------Admin Clients-----------------------------------*/
$route['adminClients'] = 'admin/adminPages/ts_clients';
$route['AddClient'] = 'admin/adminPages/add_client';
$route['GetUpdateClient/(:any)'] = 'admin/adminPages/get_update_client/$1';
$route['UpdateClient'] = 'admin/adminPages/update_client';
$route['DeleteClient'] = 'admin/adminPages/delete_client';
$route['UpdateUserPermission'] = 'admin/adminPages/update_user_permission';
/*---------------Admin Clients Hirring Manager-----------------*/
$route['ClientsHiringManager/(:any)'] = 'admin/adminPages/ts_clients_hiring_manager/$1';
$route['gethiringmangerclients'] = 'admin/adminPages/get_hiringmanger_clients';
$route['Addhiringmangerclients'] = 'admin/adminPages/add_hiringmanger_clients';
$route['Getupdatehiringmangerclients/(:any)'] = 'admin/adminPages/get_update_hiringmanger_clients/$1';
$route['UpdateClientHiringmanger'] = 'admin/adminPages/update_hiringmanger_clients';
$route['DeleteClientHiringmanger'] = 'admin/adminPages/delete_hiringmanger_clients';
/*---------------Admin Clients Hirring Manager-----------------*/
/*-----------------------------Admin Clients-----------------------------------*/
$route['discounts'] = 'admin/adminPages/discounts_';

// talent request routes

$route['talentRequests'] = 'admin/talentRequests/talent_requests';
$route['submitClientBussinessArea'] = 'admin/talentRequests/submit_client_bussiness_area';
$route['submitHiringManager'] = 'admin/talentRequests/submit_hiring_manager';
$route['submitTalentRequest'] = 'admin/talentRequests/submit_talent_request';
$route['submitTalentRequest_modal'] = 'admin/talentRequests/submit_talent_request_modal';
$route['submitQuickTalentRequest'] = 'admin/talentRequests/submit_quick_talent_request';
$route['submitQuickTalentRequest_modal'] = 'admin/talentRequests/submit_quick_talent_request_modal';
$route['getClientBusinessAreea'] = 'admin/talentRequests/clientBusinessRequest'; //Adil
$route['getHirringManager'] = 'admin/talentRequests/hiringMangerRequest'; //Adil

// JobIntro's start

$route['jobIntro'] = 'admin/jobIntro/job_intro';


// pools controllerstart

$route['pools'] = 'admin/pools/pools_';
$route['add_poool'] = 'admin/pools/add_poool';
$route['getpooldata'] = 'admin/pools/getpooldata';
$route['GetHeaderPools'] = 'admin/pools/GetHeaderPools';
$route['GetFilterRecord'] = 'admin/pools/GetFilterRecord';

// feedback management 

$route['feedback'] = 'admin/feedback/feedback_';

// Calendar management 

$route['calendar'] = 'admin/calendar/calendar_';

// myTeam management 

$route['myTeam'] = 'admin/myTeam/my_team';

// admin settings management 

$route['settings'] = 'admin/settings/settings_';
$route['save_setting'] = 'admin/settings/save_setting';
$route['save_setting_value'] = 'admin/settings/save_setting_value';
$route['value_setting/(:any)'] = 'admin/settings/value_setting/$1';
$route['change_status'] = 'admin/settings/change_status';
$route['change_outer_status'] = 'admin/settings/change_outer_status';
$route['delete_setting'] = 'admin/settings/delete_setting';
$route['delete_outer_setting'] = 'admin/settings/delete_outer_setting';


// ADMIN CLIENT ROUTES START
$route['clientHireTalent'] = 'admin/settings/settings_';

// MARKET INIGHT ROUTES STARTS
$route['salaryBenchmarking'] = 'client/marketInsights/salary_benchmarking';
$route['talentBenchmarking'] = 'client/marketInsights/talent_benchmarking';
$route['market_map_and_talent_intros'] = 'client/marketInsights/market_map_and_talent_intros';
// MARKET INIGHT ROUTES ENDS

// ADMIN CLIENT ROUTES ENDS 