<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AdminLogin extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('General_model','General_model');
    }
    
	//login to Admin 
	public function signIn()
	{

		if(!isset($this->session->userdata['id']))
		{
			$json =  array();
			if($this->input->server('REQUEST_METHOD') == 'POST')
			{
				// echo "<pre>";print_r($_POST);die();
				$json = array();
				$this->form_validation->set_rules('email', 'Email', 'required|max_length[150]|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[32]');
				if ($this->form_validation->run() !== false)
				{
					$email = $this->input->post('email');
					$password = md5($this->input->post('password'));
					$role_id = $this->input->post('role_id_reg');
					$where = array('email' => $email, 'password' => $password, 'role_id' => $role_id, 'status' => 1);
					$result = $this->general_model->get('ts_users',$objArr=TRUE,$where);
					// echo "<pre>";print_r($result);die();
					$remember = $this->input->post('remember_me');
					if($result)
					{
						$cookie_time = 60*60*24*7;
						$cookie_time_onset = $cookie_time+ time();
						if (isset($remember)) 
						{
							setcookie('email', $email, $cookie_time_onset);
							setcookie('password', $this->input->post('password'), $cookie_time_onset);
						}
						else
						{
							$cookie_time_fromoffset = time() -$cookie_time;
							setcookie('email', '', $cookie_time_fromoffset);
							setcookie('password', '', $cookie_time_fromoffset);
						}
						$sess_array = array();
						foreach($result as $row)
						{
							$sess_array = array
							(
								'id' 			=> $row->id,
								'firstname'		=> $row->firstname,
								'lastname'		=> $row->lastname,
								'email'			=> $row->email,
								'role_id'		=> $row->role_id,
							);
							$this->session->set_userdata($sess_array);
						}
						$this->session->set_flashdata('success', 'Successfully Login.');
						$json = array
						(
							'status' => 'ok',
							'redirect' => 'dashboard'
						);
					}
					else
					{
						//$this->session->set_flashdata('errors', 'Username/Password Invalid');
						$json = array
						(
							'status' => 'false',
							'redirect' => 'login',
							'message' => 'Please select correct user type or enter correct login information!'
						);
					}
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					die;
				}
				else
				{
					$json = array
					(
						'email' => form_error('email', '<p class="mt-3 text-danger">', '</p>'),
						'password' => form_error('password', '<p class="mt-3 text-danger">', '</p>'),
					);
					$this->output->set_content_type('application/json')->set_output(json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))->_display();
					exit;				
				}
			}
			else
			{
				$data['clientOrBussinessArea'] = $this->General_model->get('ts_client_or_business_area');
				$data['hiringManager'] = $this->General_model->get('ts_hiring_manager');
				$data['page'] = 'admin-login';
				$data['content'] = 'frontend/user/admin-login';
				$this->load->view('frontend/master_layout',$data);
			}
		}
	else
		{
			redirect('dashboard');	
		}
	}
}