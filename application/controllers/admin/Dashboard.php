<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Dashboard extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('General_model','General_model');
        $this->load->model('admin/Dashboard_model','Dashboard_model');
        $this->load->model('admin/Setting_model','Setting_model');
    }
    
	public function dashboard_()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5 )
		{
			// $data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			// $data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['talents'] = $this->General_model->get('ts_talent');
			$data['talent_requests'] = $this->General_model->get('ts_talent_requests');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'dashboard';
			$data['content'] = 'admin_side/dashboard/dashboard';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	}
	public function fetch_dashboard_jobs()
	{	
			$where = array(
				'talent_request_id'=>$_POST['talent_request_id']
			);
			// echo "<pre>";print_r($where);die();
			$data['talent_requests_hiring_manager'] = $this->Dashboard_model->get_talent_request_data($where);

			$data['job_locations'] = $this->Setting_model->get_settings_value($data['talent_requests_hiring_manager']->job_location);
			$data['job_feilds'] = $this->Setting_model->get_settings_value($data['talent_requests_hiring_manager']->job_field);
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=false, $where = array('calendar_no'=>1));
			 // echo "<pre>";print_r($data);die();
			$data['modal_view'] = $this->load->view('admin_side/dashboard/dashboard_jobs_modal',$data,TRUE);
			// echo "<pre>";print_r($data['modal_view']);die();
			echo json_encode($data);
	} 
	public function fetch_dashboard_talents()
	{
			$where = array(
				'talent_id'=>$_POST['talent_id']
			);
			$data['talents'] = $this->General_model->get('ts_talent',$arrObj=true,$where);
			// echo "<pre>";print_r($data['talents'][0]->location);die();	
			$data['job_locations'] = $this->Setting_model->get_settings_value($data['talents'][0]->location);
			$data['job_feilds'] = $this->Setting_model->get_settings_value($data['talents'][0]->job_field);
			 // echo "<pre>";print_r($data);die();
			$data['talent_modal_view'] = $this->load->view('admin_side/dashboard/talent_dashboard_modal',$data,TRUE);
			// echo "<pre>";print_r($data['modal_view']);die();
			echo json_encode($data);
	} 


	public function fetch_dashboard_intros()
	{
			$where = array(
				'intro_id'=>$_POST['intro_id']
			);
			$data = array();
			 // echo "<pre>";print_r($data);die();
			$data['intor_modal_view'] = $this->load->view('admin_side/dashboard/dashboard_intros_modal',$data,TRUE);
			// echo "<pre>";print_r($data['intor_modal_view']);die();
			echo json_encode($data);
	} 
}