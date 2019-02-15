<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class JobIntro extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	public function job_intro()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1) 
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['page'] = 'jobIntro';
			$data['content'] = 'admin_side/jobIntro/job_intro';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('login');
		}
	} 
}