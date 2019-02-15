<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Settings extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
        $this->load->model('admin/Setting_model','Setting_model');
    }
    
	public function settings_()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['setttings'] = $this->General_model->get('ts_settings');
			$data['page'] = 'settings';
            $data['display_setting'] = $this->Setting_model->display_settings_values();
			$data['content'] = 'admin_side/settings/settings_';
			
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('login');
		}
	}

	 public function save_setting()
	 {

	 	$this->form_validation->set_rules('setting_name','Setting Name','trim|required');

	 	if ($this->form_validation->run() == false) {
	 		$data = "Please Enter Setting Name";
	 		$this->session->set_flashdata('setting_name', $data);
	 		redirect('settings','refresh');

	 	}else{
	 		$data = array(
        
            	'setting_name'  => $this->input->post('setting_name') 
        
        	);
	 	
	 		$insert = $this->general_model->save('ts_settings',$data);
	 	
	 		redirect('settings','refresh');
	 	}
 	 
    }

    
    public function save_setting_value()
    {

    	$data = $this->input->post('setting_data');

	 	$insert = $this->general_model->save('ts_setting_values',$data);

	 	print_r($insert); die();

	 	echo json_encode($insert);
	}  

	public function updateinnerSeting()
	{
		
        $setting_data = $this->input->post('updateinnerSeting');

        $id = $this->input->post('id');

        $where = array('value_id' => $id);

        $updated = $this->general_model->update('ts_setting_values', $setting_data, $where);

        echo json_encode($updated);
	}

	public function getsettingmodal($id)
	{
		$where = array('setting_id' => $id);

        $setting_data = $this->general_model->get('ts_settings',$objArr=FALSE, $where);

        echo json_encode($setting_data);
	}

	public function getinnersettingmodal($id)
	{
		$where = array('value_id' => $id);

        $setting_data = $this->general_model->get('ts_setting_values',$objArr=FALSE, $where);

        echo json_encode($setting_data);
	}

	public function updateouterSeting()
	{
		$id = $this->input->post('id');
		
		$data = $this->input->post('updateOuterSetting');

		$where = array('setting_id' => $id);

		$updated = $this->general_model->update('ts_settings', $data, $where);

		echo json_encode($updated);
	}



    public function value_setting($id)
    {   
      	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
		 	$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
		 	$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
		 	$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
		 	$data['setttings'] = $this->General_model->get('ts_settings');
		 	$data['page'] = 'settings';
		 	 $data['setting_name']= $this->Setting_model->settings_name($id); 
             $data['display_setting']= $this->Setting_model->settings_values($id); 
			$data['content'] = 'admin_side/settings/setting_value';
			$this->load->view('admin_side/admin_master_layout',$data);
        }
    } 

    public function delete_setting()
    {
    	$id = $this->input->post('value_id');

    	$where = array('value_id' => $id);

        $delete = $this->general_model->delete('ts_setting_values', $where);

        echo json_encode($delete);
    }

    public function change_status()
    { 
       $id = $this->input->post('value_id');
       $status= $this->Setting_model->settings_values_status($id);
    }

    public function change_outer_status()
    { 
       $id = $this->input->post('outer_status');
       //print_r($id); die('Test');
       $status= $this->Setting_model->settings_outer_status($id);
    }

    public function delete_outer_setting()
    {
    	$id = $this->input->post('setting_id');

    	$where = array('setting_id' => $id);

        $delete = $this->general_model->delete('ts_settings', $where);

        echo json_encode($delete);
    }
    



}