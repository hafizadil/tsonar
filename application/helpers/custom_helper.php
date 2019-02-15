<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Get whole column from a specific table
if ( ! function_exists('get_specific_column'))
{
    function get_specific_column($table_name, $column_name)
    {
        $ci=& get_instance();
         $result  = $ci->General_model->get_specific_column($table_name, $column_name);
         $column = array();
         foreach ($result as $key=> $res) {
            $column[$key] = $res[$column_name];
        }
         return $column;    
    }   
}

// get value_id and value_name from ts_setting_values table

if ( ! function_exists('get_setting_values'))
{
    function get_setting_values($setting_id)
    {
        $ci=& get_instance();
        $where = array(
            'setting_id' => $setting_id,
            'value_status' => 1
        );
        $fields = array(
            'value_id' ,
            'value_name'
        );
         $setting_values  = $ci->General_model->get('ts_setting_values', $objArr=TRUE, $where, $fields);
         return $setting_values;    
    }   
}

if ( ! function_exists('GetSettingsData'))
{
    function GetSettingsData($table, $where)
        {
            $CI = &get_instance();
            $CI->load->model('General_model','General_model');
            //$this->load->model('admin/Setting_model','Setting_model');
            $CI->load->model('admin/Setting_model','Setting_model');
            $SettingData = $CI->General_model->get($table, $objArr=FALSE, $where);
            return $SettingData;
        }
}
if ( ! function_exists('fetch_values_name_id'))
{
    function fetch_values_name_id($locations)
        {

            $CI = &get_instance();
            $locations_ids = $locations; 
            // $locations_array  = explode (",", $locations_ids);
            // echo "<pre>";print_r($locations_array);
            $CI->load->model('admin/Setting_model','Setting_model');
            $SettingData = $CI->Setting_model->get_settings_value($locations_ids);
            // echo "<pre>";print_r();
            return $SettingData;
        }
}