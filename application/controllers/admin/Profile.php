<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Profile extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('admin/Profile_model','profile');
        $this->load->model('General_model','General_model');

    }
	public function agencyRecruiterProfile()
	{

		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'agencyRecruiterProfile';
			$data['content'] = 'admin_side/profile/agencyRecruiterProfile';
			$this->load->view('admin_side/admin_master_layout',$data);
		}
		else
		{
			redirect('login');
		}
	} 
	public function userProfile()
	{
		
			if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
				{
					$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
					$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
					$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
					$data['userData'] = $this->profile->get_userProfile($this->session->userdata['id']);
					$data['countries'] = $this->general_model->get('ts_countries', $objArr=TRUE);
					$data['page'] = 'userProfile';
					$data['content'] = 'admin_side/profile/userProfile';
					$this->load->view('admin_side/admin_master_layout',$data);
				}
			else
				{
					redirect('login');
				}
	

	} 
	public function update_userProfile()
	{

		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			// echo "<pre>";print_r($_POST);die();
				$json = array();
				$this->form_validation->set_rules('name','Name','trim|required');
				$this->form_validation->set_rules('title','Title','trim|required');
				$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email');
				$this->form_validation->set_rules('country','Country','trim|required');
				$this->form_validation->set_rules('phone', 'Phone', 'required');
				$this->form_validation->set_rules('companyName', 'Company Name', 'required');
				$this->form_validation->set_rules('companyWebsite', 'Company Website', 'required');
				
				if ($this->form_validation->run() !== false)
				{
					$updateData = array(
						'id' => $this->input->post('user_id'),
						'firstname' => $this->input->post('name'),
						'jobTitle' => $this->input->post('title'),
						'country' => $this->input->post('country'),
						'email' => $this->input->post('email'),
						'companyName' => $this->input->post('companyName'),
						'companyWebsite' => $this->input->post('companyWebsite'),
						'Phone' => $this->input->post('phone')

					);
					$updateData = $this->profile->update_userProfile($updateData);
					
	                if($updateData)
					{
						$this->session->set_flashdata('success', 'Profile Updated Successfully.');
						$json = array
						(
							'status' => 'ok',
							'redirect' => 'userProfile'
						);
					}
					else
					{
						$this->session->set_flashdata('errors', 'Something Went Wrong.');
						$json = array
						(
							'status' => 'false',
							'redirect' => 'userProfile'
						);
					}
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					$json = array
					(
						'name' => form_error('name', '<p class="mt-3 text-danger">', '</p>'),
						'title' => form_error('title', '<p class="mt-3 text-danger">', '</p>'),
						'country' => form_error('country', '<p class="mt-3 text-danger">', '</p>'),
						'phone' => form_error('phone', '<p class="mt-3 text-danger">', '</p>'),
						'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
						'companyName' => form_error('companyName', '<p class="mt-3 text-danger">', '</p>'),
						'companyWebsite' => form_error('companyWebsite', '<p class="mt-3 text-danger">', '</p>')
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					exit;				
				}		
		}

	} 
	public function update_userImage()
	{
		// echo "<pre>";print_r($_POST);die();
		if (isset($this->session->userdata['id']))
		{
			$table = 'ts_users';
			$data = array(
				'avatar'=>$_POST['image_url']
			) ;
			$where = array(
				'id'=> 	$this->session->userdata['id']
			);
			$responce = $this->General_model->update($table,$data,$where);
			return $responce;
			// echo "<pre>";print_r($responce);die();
		}
	}

	// clieint admin CI_Controller
	public function client_admin_profile()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
				{
					$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
					$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
					$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
					$data['userData'] = $this->profile->get_userProfile($this->session->userdata['id']);
					$data['countries'] = $this->general_model->get('ts_countries', $objArr=TRUE);
					$data['page'] = 'clientAdminProfile';
					$data['content'] = 'admin_side/profile/clientAdminProfile';
					$this->load->view('admin_side/admin_master_layout',$data);
				}
			else
				{
					redirect('admin');
				}
	
	}

	public function CompanyProfile()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'CompanyProfile';
			$data['content'] = 'admin_side/profile/CompanyProfile';
			$this->load->view('admin_side/admin_master_layout',$data);
		}
		else
		{
			redirect('admin');
		}
	}
}