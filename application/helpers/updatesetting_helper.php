<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('UpdateSetingModalData'))
{
	function UpdateSetingModalData()
	{
	    $CI = &get_instance();
	    $CI->load->model('General_model','General_model');
	    //$this->load->model('admin/Setting_model','Setting_model');
	    $CI->load->model('admin/Setting_model','Setting_model');
	    $display_setting = $CI->Setting_model->display_settings_values();
	    //$setttings = $CI->General_model->get('ts_settings');
	    return $display_setting;
	}
}


?>