<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AdminPages extends CI_Controller 
{

	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
        $this->load->model('admin/AdminPages_model','AdminPages_model');
    }

    public function hiring_specialists()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
		{
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'hiringSpecialists';
			$data['content'] = 'admin_side/adminPages/hiring_specialists_';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
    }

    public function hiring_services()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 || $this->session->userdata('role_id_reg') ==5)
		{
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'hiringServices';
			$data['content'] = 'admin_side/adminPages/admin_services';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}	
    }

    public function hiring_billings()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 ||  $this->session->userdata('role_id_reg') ==5)
		{
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'hiringBillings';
			$data['content'] = 'admin_side/adminPages/admin_billing';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
    }

    public function hiring_reports()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 ||  $this->session->userdata('role_id_reg') ==5)
		{
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'hiringReports';
			$data['content'] = 'admin_side/adminPages/admin_reports';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
    }

    public function hiring_forms()
    {
    	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 ||  $this->session->userdata('role_id_reg') ==5)
		{
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'hiringForms';
			$data['content'] = 'admin_side/adminPages/admin_forms';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}	
    }

	public function recruiter_system_admin()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 ||  $this->session->userdata('role_id_reg') ==5)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'recruiterSystemAdmin';
			$data['content'] = 'admin_side/adminPages/recruiter_system_admin';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	}
	public function agency_usage()
	{
		// echo "<pre>";print_r($this->session->userdata('role_id_reg'));die();
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'agencyUsage';
			$data['content'] = 'admin_side/adminPages/agency_usage';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	} 
	public function starting_fee_matrix()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'startingFeeMatrix';
			$data['content'] = 'admin_side/adminPages/starting_fee_matrix';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	}
	// public function ts_clients()
	// {
	// 	if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
	// 	{
	// 		$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
	// 		$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
	// 		$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
	// 		$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
	// 		$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
	// 		$data['page'] = 'adminClients';
	// 		$data['content'] = 'admin_side/adminPages/admin_clients';
	// 		$this->load->view('admin_side/admin_master_layout',$data);
	// 	}  
	// 	else
	// 	{
	// 		redirect('admin');
	// 	}
	// }
	public function discounts_()
	{
		if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
		{
			$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
			$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
			$data['hiring_manager_availability_calendar'] = $this->General_model->get('ts_hiring_manager_availability_calendar',$objArr=true, $where = array('calendar_no'=>1));
			$data['talents_intros'] = $this->General_model->get('ts_talent',$objArr=true);
			$data['talent_requests_intros'] = $this->General_model->get('ts_talent_requests',$objArr=true);
			$data['page'] = 'discounts';
			$data['content'] = 'admin_side/adminPages/discounts';
			$this->load->view('admin_side/admin_master_layout',$data);
		}  
		else
		{
			redirect('admin');
		}
	}

		public function ts_clients()
		{
			if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1 ||  $this->session->userdata('role_id_reg') ==5)
			{
				//$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
				//$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
				$where = array('role_id' => 5 );

				$data['allClients'] = $this->General_model->get('ts_users', $objArr=false, $where);
				$data['page'] = 'adminClients';
				$data['content'] = 'admin_side/adminPages/admin_clients';
				$this->load->view('admin_side/admin_master_layout',$data);
			} 
			else
			{
			redirect('admin');
			}
		}

		public function add_client()
		{
			$this->_validate();
			$this->_validateforadding();
			$insertData = array(
			'firstname' => $this->input->post('fname'),
			'lastname' => $this->input->post('lname'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'gender' => ($this->input->post('gender')),
			'state' => $this->input->post('state'),
			'zipcode' => $this->input->post('zipcode'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'password' => md5($this->input->post('password')),
			//'avatar' =>	$image,
			'role_id' => '5',
			'status'	=>'1'
			);
			$insert = $this->general_model->save('ts_users',$insertData);
			if ($insert) {
			$this->session->set_flashdata('success', 'Save Record Successfully.');
			echo json_encode(array("status" => TRUE));
			}else
			{
				$this->session->set_flashdata('error', 'error in saving record.');
				echo json_encode(array("status" => TRUE));
			}
		}

		public function get_update_client($id)
		{
			$where = array('id' => $id );
			$Data = $this->General_model->get('ts_users', $objArr=false, $where);
			echo json_encode($Data);
		}

		public function update_client()
		{
			$this->_validate();
			$insertData = array(
			'firstname' => $this->input->post('fname'),
			'lastname' => $this->input->post('lname'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'gender' => ($this->input->post('gender')),
			'state' => $this->input->post('state'),
			'zipcode' => $this->input->post('zipcode'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			//'avatar' =>	$image,
			'role_id' => '5'
			);
			$where = array('id' => $this->input->post('id'));
			$insert = $this->general_model->update('ts_users',$insertData, $where);
			if ($insert) {
			$this->session->set_flashdata('success', 'Updated Record Successfully.');
			echo json_encode(array("status" => TRUE));
			}else{
			$this->session->set_flashdata('error', 'error in saving record.');
			echo json_encode(array("status" => TRUE));
			}
		}

		public function delete_client()
		{
			$id = $this->input->post('clientID');

			$where = array('id' => $id);

			$delete = $this->General_model->delete('ts_users', $where);

		echo json_encode($delete);
		}

		public function ts_clients_hiring_manager($id)
		{
			if(isset($this->session->userdata['id']) && $this->session->userdata('role_id_reg') ==1)
			{
				$where = array('id' =>$id );
				$data['Clinet'] = $this->General_model->get('ts_users',$objArr=false,$where);
				$data['HiringManager'] = $this->AdminPages_model->get_client_hiringmanager($where);
				$data['page'] = 'adminClients';
				$data['content'] = 'admin_side/adminPages/Clients/client_hiring_managers';
				$this->load->view('admin_side/admin_master_layout',$data);
			} 
			else
			{
				redirect('admin');
			}
		}

		public function get_hiringmanger_clients()
		{
			$where = array('role_id' => 5 );
			$fields = array('id','firstname', 'lastname');
			$record = $this->General_model->get('ts_users', $objArr=false, $where, $fields);

			echo json_encode($record);
		}

		public function add_hiringmanger_clients()
		{

			$this->_validateforhiringManger();
			$insertData = array(
			'hiringmanager_name' => $this->input->post('clienthiringManagerName'),
			'hiringmanager_email' => $this->input->post('clienthiringManagerEmail'),
			'hiringmanager_jobtitle' => $this->input->post('clienthiringManagerJobTitle'),
			'client_id'	=>$this->input->post('client')
			);

			$insert = $this->general_model->save('ts_hiring_manager',$insertData);

			if ($insert) {
			$this->session->set_flashdata('success', 'Save Record Successfully.');
			echo json_encode(array("status" => TRUE));
			}else{
			$this->session->set_flashdata('error', 'error in saving record.');
			echo json_encode(array("status" => TRUE));
			}

		}

		public function get_update_hiringmanger_clients($id)
		{
			$where = array('hiringmanager_id' => $id );
			$Data = $this->General_model->get('ts_hiring_manager', $objArr=false, $where);
			echo json_encode($Data);
		}


		public function update_hiringmanger_clients()
		{
			$this->_validateforhiringManger();
			$insertData = array(
			'hiringmanager_name' => $this->input->post('clienthiringManagerName'),
			'hiringmanager_email' => $this->input->post('clienthiringManagerEmail'),
			'hiringmanager_jobtitle' => $this->input->post('clienthiringManagerJobTitle')
			);

			$where = array('hiringmanager_id' => $this->input->post('action'));
			$insert = $this->general_model->update('ts_hiring_manager',$insertData, $where);
			if ($insert) {
			$this->session->set_flashdata('success', 'Updated Record Successfully.');
			echo json_encode(array("status" => TRUE));
			}else{
			$this->session->set_flashdata('error', 'error in Updating record.');
			echo json_encode(array("status" => TRUE));
			}

			}

			public function delete_hiringmanger_clients()
			{
			$id = $this->input->post('clientID');

			$where = array('hiringmanager_id' => $id);

			$delete = $this->General_model->delete('ts_hiring_manager', $where);

			echo json_encode($delete);
		}

		private function _validateforhiringManger()
		{
			$data = array();
			$data['error_string'] = array();
			$data['inputerror'] = array();
			$data['status'] = TRUE;

			if($this->input->post('clienthiringManagerName') == '')
			{
			$data['inputerror'][] = 'clienthiringManagerName';
			$data['error_string'][] = 'Hiring Manager name is required';
			$data['status'] = FALSE;
			}

			if(!filter_var($_POST['clienthiringManagerEmail'], FILTER_VALIDATE_EMAIL))
			{
			$data['inputerror'][] = 'clienthiringManagerEmail';
			$data['error_string'][] = 'invalid email';
			$data['status'] = FALSE;
			}

			if($this->input->post('clienthiringManagerJobTitle') == '')
			{
			$data['inputerror'][] = 'clienthiringManagerJobTitle';
			$data['error_string'][] = 'Hiring Manager Job Title is required';
			$data['status'] = FALSE;
			}

			if($data['status'] === FALSE)
			{
			echo json_encode($data);
			exit();
			}
			}

			private function _validateforadding()
			{
			$data = array();
			$data['error_string'] = array();
			$data['inputerror'] = array();
			$data['status'] = TRUE;

			$where = array('email' => $_POST['email'] );
			$email = $this->General_model->get('ts_users', $objArr=false, $where);
			if (!empty($email)) {
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'Email already exist';
			$data['status'] = FALSE;
			}
			if($data['status'] === FALSE)
			{
			echo json_encode($data);
			exit();
			}
		}

		private function _validate()
		{
			$data = array();
			$data['error_string'] = array();
			$data['inputerror'] = array();
			$data['status'] = TRUE;

			if($this->input->post('fname') == '')
			{
			$data['inputerror'][] = 'fname';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
			}

			if($this->input->post('lname') == '')
			{
			$data['inputerror'][] = 'lname';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			{
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'invalid email';
			$data['status'] = FALSE;
			}

			if($this->input->post('phone') == '')
			{
			$data['inputerror'][] = 'phone';
			$data['error_string'][] = 'Phone is required';
			$data['status'] = FALSE;
			}
			if($this->input->post('gender') == '')
			{
			$data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
			}

			if($this->input->post('state') == '')
			{
			$data['inputerror'][] = 'state';
			$data['error_string'][] = 'State is required';
			$data['status'] = FALSE;
			}

			if($this->input->post('zipcode') == '')
			{
			$data['inputerror'][] = 'zipcode';
			$data['error_string'][] = 'Zipcode is required';
			$data['status'] = FALSE;
			}
			if($this->input->post('city') == '')
			{
			$data['inputerror'][] = 'city';
			$data['error_string'][] = 'City is required';
			$data['status'] = FALSE;
			}
			if($this->input->post('country') == '')
			{
			$data['inputerror'][] = 'country';
			$data['error_string'][] = 'Country is required';
			$data['status'] = FALSE;
			}

			if($this->input->post('password') == '')
			{
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password is required';
			$data['status'] = FALSE;
			}
			if($this->input->post('conf_pass') == '')
			{
			$data['inputerror'][] = 'conf_pass';
			$data['error_string'][] = 'Confirm Password is required';
			$data['status'] = FALSE;
			}
			if ($this->input->post('password') != $this->input->post('conf_pass')) {
			$data['inputerror'][] = 'conf_pass';
			$data['error_string'][] = 'Passwords are not match';
			$data['status'] = FALSE;
			}


			if($data['status'] === FALSE)
			{
			echo json_encode($data);
			exit();
			}
		}


		public function update_user_permission()
		{
			$data = $this->input->post('permission_data');
			$user_id = $data['user_id'];
			$where = array('user_id' => $user_id);

			$permission_data = $this->General_model->get('ts_user_permissions', $objArr=false, $where);

			if (empty($permission_data)) {
			$insert = $this->General_model->save('ts_user_permissions', $data);
			echo json_encode($insert);
			}else{
			$update = $this->General_model->update('ts_user_permissions', $data, $where);
			echo json_encode($update);
			}
		}
}